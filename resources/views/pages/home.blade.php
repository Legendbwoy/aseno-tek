@extends('layouts.app')

@section('title', 'Aseno-Tek - Building Construction Company')
@section('meta_description', 'Aseno-Tek Building Construction Company - Professional construction services for residential and commercial buildings')
@section('meta_keywords', 'construction, building, contractor, renovation, architecture, Aseno-Tek')

@section('content')
    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Professional</p>
                    <h1 class="animated fadeInLeft">For Your Dream Project</h1>
                    <a class="btn animated fadeInUp" href="{{ route('quote') }}">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Professional Builder</p>
                    <h1 class="animated fadeInLeft">We Build Your Home</h1>
                    <a class="btn animated fadeInUp" href="{{ route('quote') }}">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/carousel-3.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Trusted</p>
                    <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                    <a class="btn animated fadeInUp" href="{{ route('quote') }}">Get A Quote</a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- Feature Start-->
    @include('components.features')
    <!-- Feature End-->

    <!-- About Start -->
    @include('components.about-section')
    <!-- About End -->

    <!-- Fact Start -->
    @include('components.facts')
    <!-- Fact End -->

    <!-- Service Start -->
    @include('components.services')
    <!-- Service End -->

    <!-- Video Start -->
    @include('components.video')
    <!-- Video End -->

    <!-- Team Start -->
    @include('components.team')
    <!-- Team End -->

    <!-- FAQs Start -->
    @include('components.faqs')
    <!-- FAQs End -->

    <!-- Testimonial Start -->
    @include('components.testimonials')
    <!-- Testimonial End -->

    <!-- Blog Start -->
    @include('components.blog')
    <!-- Blog End -->

    <!-- Gallery Preview Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header text-center">
                <p>Featured Work</p>
                <h2>Recent Gallery Projects</h2>
            </div>
            <div class="row">
                @forelse(($featuredGalleryItems ?? collect()) as $galleryItem)
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="{{ $galleryItem->image_path ? (str_starts_with($galleryItem->image_path, 'assets/') ? asset($galleryItem->image_path) : asset('storage/' . $galleryItem->image_path)) : asset('assets/img/portfolio-1.jpg') }}" alt="{{ $galleryItem->title }}">
                            </div>
                            <div class="portfolio-text">
                                <h3>{{ $galleryItem->title }}</h3>
                                <a class="btn" href="{{ route('gallery.item', $galleryItem->slug) }}">+</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">No gallery items available yet.</div>
                    </div>
                @endforelse
            </div>
            <div class="text-center mt-3">
                <a href="{{ route('gallery') }}" class="btn">View Full Gallery</a>
            </div>
        </div>
    </div>
    <!-- Gallery Preview End -->
@endsection
