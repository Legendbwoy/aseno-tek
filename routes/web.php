<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\GalleryItemController as AdminGalleryItemController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.single');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('gallery.item');

// Backward-compatible project routes.
Route::redirect('/projects', '/gallery')->name('projects');
Route::redirect('/projects/{id}', '/gallery')->name('project.detail');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter/subscribe', [ContactController::class, 'newsletter'])->name('newsletter.subscribe');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::resource('blog', AdminBlogPostController::class)->except(['show']);
        Route::resource('gallery', AdminGalleryItemController::class)->except(['show']);
    });
});
