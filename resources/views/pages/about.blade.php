@extends('layouts.app')

@section('title', 'About Us - Aseno-Tek Construction')
@section('meta_description', 'Learn about Aseno-Tek Building Construction Company, our history, mission, and values')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/Aseno-Tek Logo.jpeg') }}" alt="About Aseno-Tek">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Welcome to Aseno-Tek</p>
                        <h2>25 Years Experience</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Aseno-Tek Building Construction Company has been at the forefront of the construction industry for over two decades. We pride ourselves on delivering exceptional quality and service to our clients, building everything from residential homes to commercial complexes.
                        </p>
                        <p>
                            Our team consists of highly skilled professionals who are passionate about construction and dedicated to bringing your vision to life. From initial concept to final completion, we ensure every detail is handled with precision and care. We use modern techniques and quality materials to ensure lasting results.
                        </p>
                        <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Company Timeline Start -->
    <div class="timeline">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Journey</p>
                <h2>Company Timeline</h2>
            </div>
            <div class="timeline-container">
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>1998</h3>
                        <h4>Company Founded</h4>
                        <p>Aseno-Tek Construction was established with a vision to provide quality construction services.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <h3>2005</h3>
                        <h4>First Major Project</h4>
                        <p>Completed our first commercial building project, marking a milestone in our growth.</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>2012</h3>
                        <h4>Expansion</h4>
                        <p>Expanded operations to serve clients across multiple states.</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <h3>2020</h3>
                        <h4>1000+ Projects</h4>
                        <p>Celebrated completing over 1000 successful projects.</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>2024</h3>
                        <h4>Innovation Award</h4>
                        <p>Received industry award for innovative construction techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Timeline End -->

    <!-- Mission & Vision Start -->
    <div class="mission-vision">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mission-box">
                        <i class="flaticon-address"></i>
                        <h3>Our Mission</h3>
                        <p>To provide superior construction services that exceed client expectations through innovation, quality craftsmanship, and sustainable practices. We strive to build not just structures, but lasting relationships with our clients based on trust and excellence.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vision-box">
                        <i class="flaticon-building"></i>
                        <h3>Our Vision</h3>
                        <p>To be the most trusted and innovative construction company, setting industry standards for excellence and customer satisfaction. We envision a future where every building we create stands as a testament to our commitment to quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission & Vision End -->

    <!-- Why Choose Us Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="section-header text-center">
                <p>Why Choose Us</p>
                <h2>Our Core Values</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-worker"></i>
                        <h4>Expert Team</h4>
                        <p>Skilled professionals with years of experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-building"></i>
                        <h4>Quality Work</h4>
                        <p>Premium materials and superior craftsmanship</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-call"></i>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer service</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-address"></i>
                        <h4>Best Prices</h4>
                        <p>Competitive pricing without compromising quality</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/pages/about.css') }}">
@endpush