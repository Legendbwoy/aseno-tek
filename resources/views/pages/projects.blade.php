@extends('layouts.app')

@section('title', 'Project Details - Aseno-Tek Construction')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Project Details</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('projects') }}">Projects</a>
                    <a href="">Project Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Project Details Start -->
    <div class="project-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-main-image">
    <video 
        autoplay 
        muted 
        loop 
        playsinline 
        poster="{{ asset('assets/img/projects/buildingProject.jpeg') }}"
        class="project-video"
    >
        <source src="{{ asset('assets/img/projects/buildingProject.mp4') }}" type="video/mp4">
        <source src="{{ asset('assets/img/projects/buildingProject.mp4') }}" type="video/webm">
        <img src="{{ asset('assets/img/projects/buildingProject.mp4') }}" alt="Project Image" title="Your browser doesn't support video">
    </video>
</div>
                    
                    <div class="project-description">
                        <h3>Project Overview</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.</p>
                        
                        <h3>Project Challenges</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.</p>
                        
                        <h3>Solutions Provided</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.</p>
                        
                        <h3>Key Features</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> Modern architectural design</li>
                            <li><i class="fa fa-check"></i> Energy-efficient systems</li>
                            <li><i class="fa fa-check"></i> High-quality materials</li>
                            <li><i class="fa fa-check"></i> Sustainable construction</li>
                            <li><i class="fa fa-check"></i> Smart home technology</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="project-info">
                        <h3>Project Information</h3>
                        <ul>
                            <li><strong>Client:</strong> John Doe</li>
                            <li><strong>Category:</strong> Residential</li>
                            <li><strong>Location:</strong> Beverly Hills, CA</li>
                            <li><strong>Area:</strong> 4500 sq.ft</li>
                            <li><strong>Year:</strong> 2024</li>
                            <li><strong>Duration:</strong> 8 months</li>
                            <li><strong>Value:</strong> $1.5M</li>
                        </ul>
                    </div>
                    
                    <div class="project-gallery">
                        <h3>Project Gallery</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ asset('assets/img/projects/buildingProject.jpeg') }}" data-lightbox="project-gallery">
                                    <img src="{{ asset('assets/img/projects/buildingProject.jpeg') }}" alt="Gallery Image">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset('assets/img/projects/projectVideo.mp4') }}" data-lightbox="project-gallery">
                                    <img src="{{ asset('assets/img/projects/projectVideo.mp4') }}" alt="Gallery Image">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset('assets/img/projects/buildingProject.jpeg') }}" data-lightbox="project-gallery">
                                    <img src="{{ asset('assets/img/projects/buildingProject.jpeg') }}" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="project-cta">
                        <h3>Need Similar Project?</h3>
                        <p>Contact us today for a free consultation and quote</p>
                        <a href="{{ route('contact') }}" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Details End -->
@endsection

@push('styles')
<style>
.project-main-image {
    position: relative;
    width: 100%;
    overflow: hidden;
    border-radius: 10px;
    background-color: #f5f5f5; /* Fallback color */
}

.project-video {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.project-video:hover {
    transform: scale(1.02);
}

/* For mobile devices, ensure video doesn't autoplay with sound */
@media (max-width: 768px) {
    .project-video {
        /* Ensure muted attribute works on mobile */
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
    }
}    
.project-detail {
    padding: 80px 0;
}

.project-main-image {
    margin-bottom: 30px;
    border-radius: 10px;
    overflow: hidden;
}

.project-main-image img {
    width: 100%;
    height: auto;
}

.project-description h3 {
    margin: 30px 0 15px;
    color: #333;
}

.project-description p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.project-description ul {
    list-style: none;
    padding: 0;
}

.project-description ul li {
    margin-bottom: 10px;
    color: #666;
}

.project-description ul li i {
    color: #fdbe33;
    margin-right: 10px;
}

.project-info {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    margin-bottom: 30px;
}

.project-info h3 {
    margin-bottom: 20px;
    color: #333;
}

.project-info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.project-info ul li {
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
    color: #666;
}

.project-info ul li:last-child {
    border-bottom: none;
}

.project-info ul li strong {
    color: #333;
    width: 100px;
    display: inline-block;
}

.project-gallery {
    margin-bottom: 30px;
}

.project-gallery h3 {
    margin-bottom: 20px;
    color: #333;
}

.project-gallery .row {
    margin: 0 -5px;
}

.project-gallery .col-4 {
    padding: 0 5px;
}

.project-gallery img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.project-gallery img:hover {
    opacity: 0.8;
    transform: scale(1.05);
}

.project-cta {
    background: linear-gradient(135deg, #fdbe33, #e6a400);
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    color: #fff;
}

.project-cta h3 {
    color: #fff;
    margin-bottom: 10px;
}

.project-cta p {
    color: #fff;
    margin-bottom: 20px;
}

.project-cta .btn {
    background: #fff;
    color: #fdbe33;
    padding: 10px 30px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.project-cta .btn:hover {
    background: #333;
    color: #fff;
}
</style>
@endpush