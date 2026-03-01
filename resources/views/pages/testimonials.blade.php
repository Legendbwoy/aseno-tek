@extends('layouts.app')

@section('title', 'Testimonials - Aseno-Tek Construction')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Client Testimonials</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Testimonials</a>
                </div>
            </div>
        </div>
    </div>

    @include('components.testimonials')
@endsection
