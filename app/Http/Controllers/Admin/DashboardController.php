<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\GalleryItem;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'blog_posts' => BlogPost::count(),
            'published_blog_posts' => BlogPost::where('is_published', true)->count(),
            'gallery_items' => GalleryItem::count(),
            'published_gallery_items' => GalleryItem::where('is_published', true)->count(),
            'contacts' => Contact::count(),
            'unread_contacts' => Contact::where('status', 'unread')->count(),
        ];

        $latestPosts = BlogPost::latest()->limit(5)->get();
        $latestGalleryItems = GalleryItem::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'latestPosts', 'latestGalleryItems'));
    }
}
