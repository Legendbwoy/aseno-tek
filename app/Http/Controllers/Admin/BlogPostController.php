<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $search = trim((string) $request->query('search', ''));
        $status = $request->query('status');

        $posts = BlogPost::query()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery
                        ->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%");
                });
            })
            ->when($status === 'published', fn ($query) => $query->where('is_published', true))
            ->when($status === 'draft', fn ($query) => $query->where('is_published', false))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.blog.index', compact('posts', 'search', 'status'));
    }

    public function create()
    {
        return view('admin.blog.create', ['post' => new BlogPost()]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateRequest($request);
        $validated['is_published'] = $request->boolean('is_published');
        $validated['slug'] = $this->buildSlug($validated['slug'] ?? null, $validated['title']);
        $validated['author_name'] = $validated['author_name'] ?? $request->user()->name;
        $validated['published_at'] = $validated['is_published'] ? ($validated['published_at'] ?? now()) : null;

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        BlogPost::create($validated);

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Blog post created successfully.');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', ['post' => $blog]);
    }

    public function update(Request $request, BlogPost $blog)
    {
        $validated = $this->validateRequest($request, $blog);
        $validated['is_published'] = $request->boolean('is_published');
        $validated['slug'] = $this->buildSlug($validated['slug'] ?? null, $validated['title'], $blog->id);
        $validated['published_at'] = $validated['is_published'] ? ($validated['published_at'] ?? $blog->published_at ?? now()) : null;

        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image) {
                Storage::disk('public')->delete($blog->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        } elseif ($request->boolean('remove_featured_image')) {
            if ($blog->featured_image) {
                Storage::disk('public')->delete($blog->featured_image);
            }
            $validated['featured_image'] = null;
        }

        $blog->update($validated);

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blog)
    {
        if ($blog->featured_image) {
            Storage::disk('public')->delete($blog->featured_image);
        }

        $blog->delete();

        return redirect()
            ->route('admin.blog.index')
            ->with('success', 'Blog post deleted successfully.');
    }

    private function validateRequest(Request $request, ?BlogPost $blogPost = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('blog_posts', 'slug')->ignore($blogPost?->id),
            ],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:100'],
            'author_name' => ['nullable', 'string', 'max:100'],
            'featured_image' => ['nullable', 'image', 'max:2048'],
            'is_published' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'remove_featured_image' => ['nullable', 'boolean'],
        ], [], [
            'published_at' => 'publish date',
        ]);
    }

    private function buildSlug(?string $slug, string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($slug ?: $title);
        $base = $base !== '' ? $base : 'post';
        $candidate = $base;
        $counter = 2;

        while (BlogPost::query()
            ->where('slug', $candidate)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $candidate = "{$base}-{$counter}";
            $counter++;
        }

        return $candidate;
    }
}
