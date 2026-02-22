@extends('layouts.app')

@section('title', 'Our Services - Aseno-Tek Construction')
@section('meta_description', 'Explore our comprehensive range of services including pest control, cleaning, printing, general merchant, construction, and surveying.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Services</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Services Start -->
    @include('components.services')
    <!-- Services End -->

    <!-- Why Choose Us Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="section-header text-center">
                <p>Why Choose Us</p>
                <h2>Why Aseno-Tek Stands Out</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-worker"></i>
                        <h4>Certified Professionals</h4>
                        <p>Our team is fully trained and certified in all service areas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-building"></i>
                        <h4>Quality Assurance</h4>
                        <p>We maintain the highest standards in every service we provide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-call"></i>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer service for emergencies</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-box">
                        <i class="flaticon-address"></i>
                        <h4>Competitive Pricing</h4>
                        <p>Best value for money without compromising on quality</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->

    <!-- Service Areas Start -->
    <div class="service-areas">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="areas-content">
                        <h3>Service Coverage</h3>
                        <p>We provide our comprehensive range of services across multiple locations, ensuring quality and reliability wherever you are.</p>
                        <ul>
                            <li><i class="fa fa-check"></i> Residential Properties</li>
                            <li><i class="fa fa-check"></i> Commercial Buildings</li>
                            <li><i class="fa fa-check"></i> Industrial Facilities</li>
                            <li><i class="fa fa-check"></i> Construction Sites</li>
                            <li><i class="fa fa-check"></i> Office Complexes</li>
                            <li><i class="fa fa-check"></i> Schools & Institutions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="areas-image">
                        <img src="{{ asset('assets/img/service-areas.jpg') }}" alt="Service Areas">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Areas End -->
@endsection

@push('styles')
<style>
/* Additional styles for service page */
.service-list {
    text-align: left;
    padding: 15px;
    margin-top: 10px;
    list-style: none;
}

.service-list li {
    color: #fff;
    font-size: 14px;
    margin-bottom: 8px;
    padding-left: 5px;
}

.service-list li i {
    color: #fdbe33;
    margin-right: 8px;
}

.service-overlay {
    padding: 20px !important;
    overflow-y: auto;
}

.service-overlay p {
    margin-bottom: 15px;
    color: #fff;
    font-size: 14px;
    line-height: 1.6;
}

.service-overlay ul {
    margin-bottom: 0;
}

.service-text h3 {
    font-size: 18px;
    line-height: 1.4;
    min-height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-areas {
    padding: 80px 0;
    background: #f8f9fa;
}

.areas-content {
    padding-right: 30px;
}

.areas-content h3 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.areas-content p {
    margin-bottom: 25px;
    color: #666;
    line-height: 1.8;
}

.areas-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.areas-content ul li {
    margin-bottom: 12px;
    color: #555;
    font-size: 16px;
}

.areas-content ul li i {
    color: #fdbe33;
    margin-right: 10px;
}

.areas-image {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.areas-image img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.areas-image:hover img {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .areas-content {
        padding-right: 0;
        margin-bottom: 30px;
    }
    
    .service-text h3 {
        font-size: 16px;
        min-height: auto;
    }
    
    .service-overlay {
        padding: 15px !important;
    }
    
    .service-list li {
        font-size: 12px;
        margin-bottom: 5px;
    }
}
</style>
@endpush