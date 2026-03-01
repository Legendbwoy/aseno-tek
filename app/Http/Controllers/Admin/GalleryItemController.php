<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class GalleryItemController extends Controller
{
    public function index(Request $request)
    {
        $search = trim((string) $request->query('search', ''));
        $status = $request->query('status');

        $items = GalleryItem::query()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery
                        ->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%")
                        ->orWhere('project_location', 'like', "%{$search}%");
                });
            })
            ->when($status === 'published', fn ($query) => $query->where('is_published', true))
            ->when($status === 'draft', fn ($query) => $query->where('is_published', false))
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('admin.gallery.index', compact('items', 'search', 'status'));
    }

    public function create()
    {
        return view('admin.gallery.create', ['item' => new GalleryItem()]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateRequest($request);
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['slug'] = $this->buildSlug($validated['slug'] ?? null, $validated['title']);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('gallery', 'public');
        }

        GalleryItem::create($validated);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery item created successfully.');
    }

    public function edit(GalleryItem $gallery)
    {
        return view('admin.gallery.edit', ['item' => $gallery]);
    }

    public function update(Request $request, GalleryItem $gallery)
    {
        $validated = $this->validateRequest($request, $gallery);
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['slug'] = $this->buildSlug($validated['slug'] ?? null, $validated['title'], $gallery->id);

        if ($request->hasFile('image_path')) {
            if ($gallery->image_path) {
                Storage::disk('public')->delete($gallery->image_path);
            }
            $validated['image_path'] = $request->file('image_path')->store('gallery', 'public');
        } elseif ($request->boolean('remove_image_path')) {
            if ($gallery->image_path) {
                Storage::disk('public')->delete($gallery->image_path);
            }
            $validated['image_path'] = null;
        }

        $gallery->update($validated);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(GalleryItem $gallery)
    {
        if ($gallery->image_path) {
            Storage::disk('public')->delete($gallery->image_path);
        }

        $gallery->delete();

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery item deleted successfully.');
    }

    private function validateRequest(Request $request, ?GalleryItem $galleryItem = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('gallery_items', 'slug')->ignore($galleryItem?->id),
            ],
            'category' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'image_path' => [$galleryItem ? 'nullable' : 'required', 'image', 'max:4096'],
            'project_location' => ['nullable', 'string', 'max:150'],
            'completed_at' => ['nullable', 'date'],
            'is_featured' => ['nullable', 'boolean'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'remove_image_path' => ['nullable', 'boolean'],
        ]);
    }

    private function buildSlug(?string $slug, string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($slug ?: $title);
        $base = $base !== '' ? $base : 'project';
        $candidate = $base;
        $counter = 2;

        while (GalleryItem::query()
            ->where('slug', $candidate)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $candidate = "{$base}-{$counter}";
            $counter++;
        }

        return $candidate;
    }
}
