@extends('layouts.app')

@section('title', 'Blog - Aseno-Tek Construction')
@section('meta_description', 'Explore construction tips, project insights, and practical guides from Aseno-Tek.')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Blog</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Blog</a>
                </div>
            </div>
        </div>
    </div>

    <div class="blog py-5">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="{{ $post->featured_image ? (str_starts_with($post->featured_image, 'assets/') ? asset($post->featured_image) : asset('storage/' . $post->featured_image)) : asset('assets/img/blog-1.jpg') }}" alt="{{ $post->title }}">
                            </div>
                            <div class="blog-title">
                                <h3>{{ $post->title }}</h3>
                                <a class="btn" href="{{ route('blog.single', $post->slug) }}">+</a>
                            </div>
                            <div class="blog-meta">
                                <p>By <a href="#">{{ $post->author_name ?: 'Admin' }}</a></p>
                                <p>In <a href="#">{{ $post->category ?: 'General' }}</a></p>
                            </div>
                            <div class="blog-text">
                                <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No blog posts have been published yet.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-3">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
