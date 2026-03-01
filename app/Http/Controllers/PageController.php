<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\GalleryItem;

class PageController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        $latestPosts = BlogPost::published()
            ->latest('published_at')
            ->limit(3)
            ->get();

        $featuredGalleryItems = GalleryItem::published()
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->latest()
            ->limit(6)
            ->get();

        return view('pages.home', compact('latestPosts', 'featuredGalleryItems'));
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the services page
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the projects gallery page
     */
    public function projects()
    {
        return redirect()->route('gallery');
    }

    /**
     * Display project detail page
     */
    public function projectDetail($id)
    {
        return redirect()->route('gallery.item', ['slug' => $id]);
    }

    /**
     * Display the team page
     */
    public function team()
    {
        return view('pages.team');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display the blog listing page
     */
    public function blog()
    {
        return redirect()->route('blog');
    }

    /**
     * Display single blog post
     */
    public function blogSingle($id)
    {
        return redirect()->route('blog.single', ['slug' => $id]);
    }

    /**
     * Display the quote request page
     */
    public function quote()
    {
        return view('pages.quote');
    }

    /**
     * Display the FAQ page
     */
    public function faq()
    {
        return view('pages.faq');
    }

    /**
     * Display the testimonials page
     */
    public function testimonials()
    {
        return view('pages.testimonials');
    }
}
