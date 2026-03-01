@extends('layouts.app')

@section('title', $item->title . ' - Aseno-Tek Project')
@section('meta_description', $item->description ?: ('Project details for ' . $item->title))

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $item->title }}</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('gallery') }}">Gallery</a>
                    <a href="">{{ $item->title }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="project-detail py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img class="img-fluid mb-4 rounded" src="{{ $item->image_path ? (str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/' . $item->image_path)) : asset('assets/img/portfolio-1.jpg') }}" alt="{{ $item->title }}">
                    <h3>Project Overview</h3>
                    <p>{{ $item->description ?: 'Project details are being updated. Contact us for complete scope, timeline, and delivery highlights.' }}</p>
                </div>
                <div class="col-lg-4">
                    <div class="project-info p-4 bg-light rounded mb-4">
                        <h4>Project Information</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><strong>Category:</strong> {{ $item->category ?: 'General' }}</li>
                            <li class="mb-2"><strong>Location:</strong> {{ $item->project_location ?: 'N/A' }}</li>
                            <li><strong>Completed:</strong> {{ $item->completed_at?->format('M Y') ?: 'N/A' }}</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-block">Request Similar Project</a>
                </div>
            </div>

            @if($relatedItems->isNotEmpty())
                <div class="mt-5">
                    <div class="section-header text-center">
                        <p>More Projects</p>
                        <h2>Related Gallery Items</h2>
                    </div>
                    <div class="row">
                        @foreach($relatedItems as $related)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ $related->image_path ? (str_starts_with($related->image_path, 'assets/') ? asset($related->image_path) : asset('storage/' . $related->image_path)) : asset('assets/img/portfolio-1.jpg') }}" alt="{{ $related->title }}">
                                    </div>
                                    <div class="portfolio-text">
                                        <h3>{{ $related->title }}</h3>
                                        <a class="btn" href="{{ route('gallery.item', $related->slug) }}">+</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
