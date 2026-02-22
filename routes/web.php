<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// Other Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PageController::class, 'projectDetail'])->name('project.detail');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PageController::class, 'blogSingle'])->name('blog.single');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');

// Contact Form Submission
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Newsletter Subscription
Route::post('/newsletter/subscribe', [ContactController::class, 'newsletter'])->name('newsletter.subscribe');