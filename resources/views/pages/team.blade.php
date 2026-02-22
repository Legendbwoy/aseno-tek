@extends('layouts.app')

@section('title', 'Our Team - Aseno-Tek Construction')
@section('meta_description', 'Meet our professional team of engineers, architects, and construction experts at Aseno-Tek.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Team</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Our Team</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Intro Start -->
    <div class="team-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="intro-content">
                        <h2>Meet Our Expert Team</h2>
                        <p>At Aseno-Tek, we pride ourselves on having a team of highly skilled professionals who are passionate about construction and dedicated to delivering excellence in every project. Our diverse team brings together years of experience, innovative thinking, and technical expertise.</p>
                        <p>From architects and engineers to project managers and skilled workers, every member of our team is committed to bringing your vision to life while maintaining the highest standards of quality and safety.</p>
                        <div class="team-stats">
                            <div class="stat">
                                <h3>50+</h3>
                                <p>Team Members</p>
                            </div>
                            <div class="stat">
                                <h3>25+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat">
                                <h3>15+</h3>
                                <p>Certified Experts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-image">
                        <img src="{{ asset('assets/img/team/team-intro.jpg') }}" alt="Our Team">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Intro End -->

    <!-- Leadership Team Start -->
    <div class="leadership-team">
        <div class="container">
            <div class="section-header text-center">
                <p>Leadership</p>
                <h2>Our Management Team</h2>
            </div>
            <div class="row">
                <!-- CEO -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/ceo.jpg') }}" alt="CEO">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>John Anderson</h2>
                            <p>CEO & Founder</p>
                            <div class="team-expertise">
                                <span>25+ years experience</span>
                                <span>Civil Engineering</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Director -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/project-director.jpg') }}" alt="Project Director">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Sarah Williams</h2>
                            <p>Project Director</p>
                            <div class="team-expertise">
                                <span>18+ years experience</span>
                                <span>PMP Certified</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chief Architect -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/architect.jpg') }}" alt="Chief Architect">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Michael Chen</h2>
                            <p>Chief Architect</p>
                            <div class="team-expertise">
                                <span>20+ years experience</span>
                                <span>LEED Certified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leadership Team End -->

    <!-- Engineering Team Start -->
    <div class="engineering-team">
        <div class="container">
            <div class="section-header text-center">
                <p>Engineering</p>
                <h2>Our Engineering Team</h2>
            </div>
            <div class="row">
                <!-- Civil Engineer 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/civil-1.jpg') }}" alt="Civil Engineer">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>David Martinez</h2>
                            <p>Senior Civil Engineer</p>
                            <div class="team-expertise">
                                <span>12+ years</span>
                                <span>Structural Expert</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Structural Engineer -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/structural.jpg') }}" alt="Structural Engineer">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Lisa Thompson</h2>
                            <p>Structural Engineer</p>
                            <div class="team-expertise">
                                <span>10+ years</span>
                                <span>Seismic Design</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mechanical Engineer -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/mechanical.jpg') }}" alt="Mechanical Engineer">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Robert Johnson</h2>
                            <p>Mechanical Engineer</p>
                            <div class="team-expertise">
                                <span>15+ years</span>
                                <span>HVAC Expert</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Electrical Engineer -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/electrical.jpg') }}" alt="Electrical Engineer">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Emily Davis</h2>
                            <p>Electrical Engineer</p>
                            <div class="team-expertise">
                                <span>8+ years</span>
                                <span>Smart Systems</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Engineering Team End -->

    <!-- Project Managers Start -->
    <div class="project-managers">
        <div class="container">
            <div class="section-header text-center">
                <p>Management</p>
                <h2>Project Managers</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/pm-1.jpg') }}" alt="Project Manager">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>James Wilson</h2>
                            <p>Senior Project Manager</p>
                            <div class="team-expertise">
                                <span>14+ years</span>
                                <span>Commercial Projects</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/pm-2.jpg') }}" alt="Project Manager">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Maria Garcia</h2>
                            <p>Project Manager</p>
                            <div class="team-expertise">
                                <span>10+ years</span>
                                <span>Residential Expert</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/pm-3.jpg') }}" alt="Project Manager">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Thomas Brown</h2>
                            <p>Project Manager</p>
                            <div class="team-expertise">
                                <span>12+ years</span>
                                <span>Industrial Projects</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/pm-4.jpg') }}" alt="Project Manager">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Jennifer Lee</h2>
                            <p>Project Manager</p>
                            <div class="team-expertise">
                                <span>9+ years</span>
                                <span>Renovation Expert</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Managers End -->

    <!-- Field Team Start -->
    <div class="field-team">
        <div class="container">
            <div class="section-header text-center">
                <p>Field Operations</p>
                <h2>Our Site Supervisors</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/supervisor-1.jpg') }}" alt="Site Supervisor">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Robert Taylor</h2>
                            <p>Senior Site Supervisor</p>
                            <div class="team-expertise">
                                <span>20+ years</span>
                                <span>Safety Expert</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/supervisor-2.jpg') }}" alt="Site Supervisor">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Kevin Anderson</h2>
                            <p>Site Supervisor</p>
                            <div class="team-expertise">
                                <span>15+ years</span>
                                <span>Quality Control</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/supervisor-3.jpg') }}" alt="Site Supervisor">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Carlos Rodriguez</h2>
                            <p>Site Supervisor</p>
                            <div class="team-expertise">
                                <span>12+ years</span>
                                <span>Concrete Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/supervisor-4.jpg') }}" alt="Site Supervisor">
                            <div class="team-social">
                                <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Michael White</h2>
                            <p>Site Supervisor</p>
                            <div class="team-expertise">
                                <span>10+ years</span>
                                <span>Equipment Expert</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Field Team End -->

    <!-- Join Our Team CTA Start -->
    <div class="join-team">
        <div class="container">
            <div class="join-content">
                <h2>Join Our Growing Team</h2>
                <p>We're always looking for talented individuals to join our team. If you're passionate about construction and want to work with the best, we want to hear from you.</p>
                <a href="{{ route('contact') }}" class="btn">View Careers</a>
            </div>
        </div>
    </div>
    <!-- Join Our Team CTA End -->
@endsection

@push('styles')
<style>
/* Team Page Styles */
.team-intro {
    padding: 80px 0;
    background: #f8f9fa;
}

.intro-content h2 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

.intro-content p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.team-stats {
    display: flex;
    gap: 30px;
    margin-top: 30px;
}

.team-stats .stat h3 {
    font-size: 36px;
    color: #fdbe33;
    margin-bottom: 5px;
}

.team-stats .stat p {
    color: #666;
    margin: 0;
}

.intro-image {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.intro-image img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.intro-image:hover img {
    transform: scale(1.05);
}

.leadership-team,
.engineering-team,
.project-managers,
.field-team {
    padding: 80px 0;
}

.engineering-team {
    background: #f8f9fa;
}

.field-team {
    background: #f8f9fa;
}

.team-item {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    margin-bottom: 30px;
}

.team-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.team-img {
    position: relative;
    overflow: hidden;
    height: 300px;
}

.team-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.team-item:hover .team-img img {
    transform: scale(1.1);
}

.team-social {
    position: absolute;
    bottom: -50px;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.team-item:hover .team-social {
    bottom: 20px;
}

.team-social a {
    width: 40px;
    height: 40px;
    background: #fff;
    color: #fdbe33;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.3s ease;
}

.team-social a:hover {
    background: #fdbe33;
    color: #fff;
    transform: rotate(360deg);
}

.team-text {
    padding: 20px;
    text-align: center;
}

.team-text h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 5px;
}

.team-text p {
    color: #fdbe33;
    font-weight: 600;
    margin-bottom: 10px;
}

.team-expertise {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
}

.team-expertise span {
    font-size: 12px;
    color: #666;
    background: #f0f0f0;
    padding: 5px 10px;
    border-radius: 20px;
}

.join-team {
    padding: 80px 0;
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('../img/team/join-bg.jpg');
    background-size: cover;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
}

.join-content h2 {
    color: #fff;
    font-size: 36px;
    margin-bottom: 20px;
}

.join-content p {
    color: #ddd;
    font-size: 18px;
    max-width: 700px;
    margin: 0 auto 30px;
}

.join-content .btn {
    background: #fdbe33;
    color: #fff;
    padding: 12px 40px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.join-content .btn:hover {
    background: #fff;
    color: #fdbe33;
}

/* Responsive */
@media (max-width: 991px) {
    .intro-content {
        margin-bottom: 30px;
    }
    
    .team-img {
        height: 250px;
    }
    
    .team-stats {
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .team-stats .stat {
        flex: 0 0 calc(33.333% - 20px);
    }
}

@media (max-width: 767px) {
    .team-stats .stat {
        flex: 0 0 100%;
        text-align: center;
    }
    
    .team-img {
        height: 200px;
    }
    
    .team-text h2 {
        font-size: 18px;
    }
    
    .join-content h2 {
        font-size: 28px;
    }
    
    .join-content p {
        font-size: 16px;
    }
}
</style>
@endpush