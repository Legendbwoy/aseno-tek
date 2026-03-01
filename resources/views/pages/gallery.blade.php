@extends('layouts.app')

@section('title', 'Project Gallery - Aseno-Tek Construction')
@section('meta_description', 'Browse completed projects and featured construction work from Aseno-Tek.')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Project Gallery</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Gallery</a>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio py-5">
        <div class="container">
            @if($categories->isNotEmpty())
                <div class="text-center mb-4">
                    @foreach($categories as $category)
                        <span class="badge badge-light border mr-2 p-2">{{ $category }}</span>
                    @endforeach
                </div>
            @endif

            <div class="row">
                @forelse($items as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="portfolio-item h-100">
                            <div class="portfolio-img">
                                <img src="{{ $item->image_path ? (str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/' . $item->image_path)) : asset('assets/img/portfolio-1.jpg') }}" alt="{{ $item->title }}">
                            </div>
                            <div class="portfolio-text">
                                <h3>{{ $item->title }}</h3>
                                <a class="btn" href="{{ route('gallery.item', $item->slug) }}">+</a>
                            </div>
                            <div class="px-3 pb-3">
                                <small class="text-muted">{{ $item->category ?: 'General' }} @if($item->project_location) | {{ $item->project_location }} @endif</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No gallery items are available yet.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-3">
                {{ $items->links() }}
            </div>
        </div>
    </div>
@endsection
