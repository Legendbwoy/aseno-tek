<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Latest Blog</p>
            <h2>Latest From Our Blog</h2>
        </div>
        <div class="row">
            @forelse(($latestPosts ?? collect()) as $post)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            @if($post->featured_image)
                                <img src="{{ str_starts_with($post->featured_image, 'assets/') ? asset($post->featured_image) : asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                            @else
                                <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="{{ $post->title }}">
                            @endif
                        </div>
                        <div class="blog-title">
                            <h3>{{ $post->title }}</h3>
                            <a class="btn" href="{{ route('blog.single', ['slug' => $post->slug]) }}">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By <a href="#">{{ $post->author_name ?: 'Admin' }}</a></p>
                            <p>In <a href="#">{{ $post->category ?: 'General' }}</a></p>
                        </div>
                        <div class="blog-text">
                            <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 140) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border">No blog posts published yet.</div>
                </div>
            @endforelse
        </div>
    </div>
</div>
