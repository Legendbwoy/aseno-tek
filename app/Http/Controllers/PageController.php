<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        return view('pages.home');
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
        return view('pages.projects');
    }

    /**
     * Display project detail page
     */
    public function projectDetail($id)
    {
        return view('pages.project-detail', compact('id'));
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
        return view('pages.blog');
    }

    /**
     * Display single blog post
     */
    public function blogSingle($id)
    {
        return view('pages.blog-single', compact('id'));
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