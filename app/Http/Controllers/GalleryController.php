<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;

class GalleryController extends Controller
{
    public function index()
    {
        $items = GalleryItem::published()
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->latest('created_at')
            ->paginate(12);

        $categories = GalleryItem::published()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('pages.gallery', compact('items', 'categories'));
    }

    public function show(string $slug)
    {
        $item = GalleryItem::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedItems = GalleryItem::published()
            ->where('id', '!=', $item->id)
            ->where('category', $item->category)
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->latest('created_at')
            ->limit(6)
            ->get();

        return view('pages.project-detail', compact('item', 'relatedItems'));
    }
}
