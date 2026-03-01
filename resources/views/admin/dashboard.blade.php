@extends('layouts.admin')

@section('title', 'Dashboard - Aseno-Tek Admin')

@section('content')
    <h3 class="mb-4">Dashboard</h3>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card card-stat">
                <div class="card-body">
                    <h6 class="text-muted">Blog Posts</h6>
                    <h3 class="mb-1">{{ $stats['blog_posts'] }}</h3>
                    <small>{{ $stats['published_blog_posts'] }} published</small>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-stat">
                <div class="card-body">
                    <h6 class="text-muted">Gallery Items</h6>
                    <h3 class="mb-1">{{ $stats['gallery_items'] }}</h3>
                    <small>{{ $stats['published_gallery_items'] }} published</small>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-stat">
                <div class="card-body">
                    <h6 class="text-muted">Contact Messages</h6>
                    <h3 class="mb-1">{{ $stats['contacts'] }}</h3>
                    <small>{{ $stats['unread_contacts'] }} unread</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-6 mb-3">
            <div class="card card-stat">
                <div class="card-header bg-white"><strong>Latest Blog Posts</strong></div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        @forelse($latestPosts as $post)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $post->title }}</span>
                                <a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            </li>
                        @empty
                            <li class="list-group-item">No posts yet.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card card-stat">
                <div class="card-header bg-white"><strong>Latest Gallery Items</strong></div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        @forelse($latestGalleryItems as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $item->title }}</span>
                                <a href="{{ route('admin.gallery.edit', $item) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            </li>
                        @empty
                            <li class="list-group-item">No gallery items yet.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
