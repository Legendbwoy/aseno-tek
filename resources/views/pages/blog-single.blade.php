@extends('layouts.app')

@section('title', $post->meta_title ?: ($post->title . ' - Aseno-Tek Blog'))
@section('meta_description', $post->meta_description ?: ($post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 150)))

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <a href="">{{ $post->title }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="single py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <img class="img-fluid mb-4" src="{{ $post->featured_image ? (str_starts_with($post->featured_image, 'assets/') ? asset($post->featured_image) : asset('storage/' . $post->featured_image)) : asset('assets/img/single.jpg') }}" alt="{{ $post->title }}">
                        <div class="mb-3 text-muted">
                            <small>
                                By {{ $post->author_name ?: 'Admin' }}
                                @if($post->published_at)
                                    | {{ $post->published_at->format('M d, Y') }}
                                @endif
                                | {{ $post->category ?: 'General' }}
                            </small>
                        </div>
                        <p>{!! nl2br(e($post->content)) !!}</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="widget-title">Related Posts</h2>
                            @forelse($relatedPosts as $related)
                                <div class="post-item mb-3">
                                    <div class="post-text">
                                        <a href="{{ route('blog.single', $related->slug) }}">{{ $related->title }}</a>
                                        <div class="post-meta">
                                            <p>{{ optional($related->published_at)->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted mb-0">No related posts available.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
