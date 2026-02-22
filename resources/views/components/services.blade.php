@extends('layouts.app')

@section('title', 'Our Services - Aseno-Tek Construction')

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

    <!-- Service Start -->
    <div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Services</p>
            <h2>What We Offer</h2>
        </div>
        <div class="row">
            <!-- Pest Control & Disinfection Services -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('assets/img/pestControl.jfif') }}" alt="Pest Control & Disinfection">
                        <div class="service-overlay">
                            <p>
                                Professional pest control and disinfection services for residential and commercial properties. We use safe, eco-friendly methods to eliminate pests and ensure a healthy environment.
                            </p>
                            <ul class="service-list">
                                <li>✓ General pest control</li>
                                <li>✓ Termite treatment</li>
                                <li>✓ Disinfection services</li>
                                <li>✓ Fumigation</li>
                                <li>✓ Rodent control</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>Pest Control & Disinfection</h3>
                        <a class="btn" href="{{ asset('assets/img/pestControl.jfif') }}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>

            <!-- Cleaning Services -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('assets/img/cleaning.jpg') }}" alt="Cleaning Services">
                        <div class="service-overlay">
                            <p>
                                Comprehensive cleaning solutions tailored to your needs. Our trained professionals deliver spotless results every time.
                            </p>
                            <ul class="service-list">
                                <li>✓ Office cleaning</li>
                                <li>✓ Home cleaning</li>
                                <li>✓ Post-construction cleaning</li>
                                <li>✓ Deep cleaning</li>
                                <li>✓ Carpet & upholstery cleaning</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>Cleaning Services</h3>
                        <a class="btn" href="{{ asset('assets/img/cleaning.jpg') }}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>

            <!-- Printing Services -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('assets/img/printing.webp') }}" alt="Printing Services">
                        <div class="service-overlay">
                            <p>
                                High-quality printing services for all your business and personal needs. Fast turnaround and competitive prices.
                            </p>
                            <ul class="service-list">
                                <li>✓ Digital printing</li>
                                <li>✓ Offset printing</li>
                                <li>✓ Business cards</li>
                                <li>✓ Brochures & flyers</li>
                                <li>✓ Banners & signage</li>
                                <li>✓ Large format printing</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>Printing Services</h3>
                        <a class="btn" href="{{ asset('assets/img/printing.webp') }}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>

            <!-- General Merchant -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('assets/img/general.jfif') }}" alt="General Merchant">
                        <div class="service-overlay">
                            <p>
                                Your one-stop shop for construction materials, hardware, and general supplies. Quality products at competitive prices.
                            </p>
                            <ul class="service-list">
                                <li>✓ Building materials</li>
                                <li>✓ Hardware supplies</li>
                                <li>✓ Tools & equipment</li>
                                <li>✓ Paints & accessories</li>
                                <li>✓ Plumbing materials</li>
                                <li>✓ Electrical supplies</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>General Merchant</h3>
                        <a class="btn" href="{{ asset('assets/img/general.jfif') }}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>

            <!-- General Construction & Civil Works -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('assets/img/construction.jfif') }}" alt="General Construction & Civil Works">
                        <div class="service-overlay">
                            <p>
                                Expert construction and civil engineering services for residential and commercial projects. Quality workmanship guaranteed.
                            </p>
                            <ul class="service-list">
                                <li>✓ Building construction</li>
                                <li>✓ Renovations & extensions</li>
                                <li>✓ Road construction</li>
                                <li>✓ Drainage systems</li>
                                <li>✓ Foundation works</li>
                                <li>✓ Structural repairs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>General Construction & Civil Works</h3>
                        <a class="btn" href="{{ asset('assets/img/construction.jfif') }}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>

            <!-- Surveying Services -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('assets/img/survey.webp') }}" alt="Surveying Services">
                        <div class="service-overlay">
                            <p>
                                Professional land surveying services using modern equipment and techniques. Accurate measurements and detailed reports.
                            </p>
                            <ul class="service-list">
                                <li>✓ Land surveying</li>
                                <li>✓ Topographical surveys</li>
                                <li>✓ Boundary surveys</li>
                                <li>✓ Construction staking</li>
                                <li>✓ Site planning</li>
                                <li>✓ 3D laser scanning</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>Surveying Services</h3>
                        <a class="btn" href="{{ asset('assets/img/survey.webp') }}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Service End -->

    <!-- Pricing Start -->
    <div class="pricing">
        <div class="container">
            <div class="section-header text-center">
                <p>Pricing Plans</p>
                <h2>Choose Your Best Plan</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="price-title">
                                <h2>Basic</h2>
                            </div>
                            <div class="price-pricing">
                                <h2><small>$</small>99<small>/m2</small></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-des">
                                <ul>
                                    <li>Construction Planning</li>
                                    <li>Architecture Design</li>
                                    <li>Interior Design</li>
                                    <li>Project Management</li>
                                    <li>Consultation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="{{ route('quote') }}">Get Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <div class="price-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="price-title">
                                <h2>Standard</h2>
                            </div>
                            <div class="price-pricing">
                                <h2><small>$</small>149<small>/m2</small></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-des">
                                <ul>
                                    <li>Construction Planning</li>
                                    <li>Architecture Design</li>
                                    <li>Interior Design</li>
                                    <li>Project Management</li>
                                    <li>Consultation</li>
                                    <li>Material Sourcing</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="{{ route('quote') }}">Get Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="price-title">
                                <h2>Premium</h2>
                            </div>
                            <div class="price-pricing">
                                <h2><small>$</small>199<small>/m2</small></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-des">
                                <ul>
                                    <li>Construction Planning</li>
                                    <li>Architecture Design</li>
                                    <li>Interior Design</li>
                                    <li>Project Management</li>
                                    <li>Consultation</li>
                                    <li>Material Sourcing</li>
                                    <li>Post-Construction Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="{{ route('quote') }}">Get Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->
@endsection