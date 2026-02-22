@extends('layouts.app')

@section('title', 'Contact Us - Aseno-Tek Construction')
@section('meta_description', 'Get in touch with Aseno-Tek Construction for inquiries, quotes, or consultations. We\'re here to help with all your construction needs.')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Info Start -->
    <div class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <h3>Visit Our Office</h3>
                        <p>AA2 Arugula St, Bungalow (CO-0055-0074), Agona Swedru<br>Central Region - Ghana</p>
                        <a href="https://maps.google.com" target="_blank" class="btn-link">Get Directions <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <h3>Call Us Anytime</h3>
                        <p>Main Office: +233 55 142 4111<br>Sales: +233 24 484 9522<br>Support: +233 59 863 4632</p>
                        <a href="tel:233551424111" class="btn-link">Call Now <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>Send Us Email</h3>
                        <p>General: asenotek@gmail.com<br>Sales: asenotek@gmail.com<br>Support: asenotek@gmail.com</p>
                        <a href="mailto:asenotek@gmail.com" class="btn-link">Email Us <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

    <!-- Contact Form & Map Start -->
    <div class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-form-wrapper">
                        <div class="section-header">
                            <p>Get In Touch</p>
                            <h2>Send Us a Message</h2>
                        </div>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check-circle mr-2"></i>
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle mr-2"></i>
                                Please correct the errors below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        
                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" class="contact-form">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="name" name="name" value="{{ old('name') }}" 
                                               placeholder="Enter your full name" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                               id="email" name="email" value="{{ old('email') }}" 
                                               placeholder="Enter your email" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                               id="phone" name="phone" value="{{ old('phone') }}" 
                                               placeholder="Enter your phone number">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="service">Service Interested In</label>
                                        <select class="form-control @error('service') is-invalid @enderror" 
                                                id="service" name="service">
                                            <option value="">Select a service</option>
                                            <option value="Pest Control" {{ old('service') == 'Pest Control' ? 'selected' : '' }}>Pest Control & Disinfection</option>
                                            <option value="Cleaning" {{ old('service') == 'Cleaning' ? 'selected' : '' }}>Cleaning Services</option>
                                            <option value="Printing" {{ old('service') == 'Printing' ? 'selected' : '' }}>Printing Services</option>
                                            <option value="General Merchant" {{ old('service') == 'General Merchant' ? 'selected' : '' }}>General Merchant</option>
                                            <option value="Construction" {{ old('service') == 'Construction' ? 'selected' : '' }}>General Construction & Civil Works</option>
                                            <option value="Surveying" {{ old('service') == 'Surveying' ? 'selected' : '' }}>Surveying Services</option>
                                        </select>
                                        @error('service')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="subject">Subject <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                               id="subject" name="subject" value="{{ old('subject') }}" 
                                               placeholder="Enter message subject" required>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Your Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" 
                                                  id="message" name="message" rows="6" 
                                                  placeholder="Write your message here..." required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
                                        <label class="form-check-label" for="privacy">
                                            I agree to the <a href="#" class="text-primary">Privacy Policy</a> and consent to being contacted <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-submit" id="submitBtn">
                                        <span class="btn-text">Send Message</span>
                                        <span class="btn-loader" style="display: none;">
                                            <i class="fa fa-spinner fa-spin"></i> Sending...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="map-wrapper">
                        <div class="section-header">
                            <p>Our Location</p>
                            <h2>Find Us Here</h2>
                        </div>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-73.9851076845843!3d40.74856997932781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b30eac9f%3A0xaca05ca48ab5ac2c!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                        
                        <!-- Business Hours -->
                        <div class="business-hours">
                            <h4><i class="fa fa-clock text-primary"></i> Business Hours</h4>
                            <div class="hours-list">
                                <div class="hour-item">
                                    <span class="day">Monday - Friday:</span>
                                    <span class="time">8:00 AM - 6:00 PM</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Saturday:</span>
                                    <span class="time">9:00 AM - 4:00 PM</span>
                                </div>
                                <div class="hour-item">
                                    <span class="day">Sunday:</span>
                                    <span class="time">Closed</span>
                                </div>
                                <div class="hour-item emergency">
                                    <span class="day">Emergency:</span>
                                    <span class="time">24/7 Support Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form & Map End -->

    <!-- FAQ Section Start -->
    <div class="faq-section">
        <div class="container">
            <div class="section-header text-center">
                <p>Quick Answers</p>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-item">
                        <h4><i class="fa fa-question-circle text-primary"></i> How quickly can you respond to inquiries?</h4>
                        <p>We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call our emergency line.</p>
                    </div>
                    <div class="faq-item">
                        <h4><i class="fa fa-question-circle text-primary"></i> Do you provide free consultations?</h4>
                        <p>Yes, we offer free initial consultations for all potential projects. Contact us to schedule an appointment.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-item">
                        <h4><i class="fa fa-question-circle text-primary"></i> What areas do you serve?</h4>
                        <p>We serve the entire metropolitan area and surrounding regions. Contact us to confirm if we operate in your location.</p>
                    </div>
                    <div class="faq-item">
                        <h4><i class="fa fa-question-circle text-primary"></i> How can I get a quote?</h4>
                        <p>Fill out our contact form or call us directly. We'll gather your requirements and provide a detailed quote within 2-3 business days.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('faq') }}" class="btn btn-outline-primary">View All FAQs</a>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->

    <!-- Newsletter Section Start -->
    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3>Subscribe to Our Newsletter</h3>
                        <p>Stay updated with our latest projects, services, and industry news.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" method="POST" class="newsletter-form">
                            @csrf
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </div>
                            </div>
                            <small class="form-text">We respect your privacy. Unsubscribe anytime.</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Section End -->
@endsection

@push('styles')
<style>
/* Contact Info Cards */
.contact-info-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.contact-info-card {
    background: #fff;
    padding: 40px 30px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.contact-info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #fdbe33, #e6a400);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.contact-info-card:hover::before {
    transform: scaleX(1);
}

.contact-info-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(253, 190, 51, 0.2);
}

.contact-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #fdbe33, #e6a400);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
}

.contact-icon i {
    font-size: 35px;
    color: #fff;
}

.contact-info-card h3 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #333;
}

.contact-info-card p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.btn-link {
    color: #fdbe33;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-link:hover {
    color: #333;
    gap: 12px;
}

/* Contact Form Section */
.contact-form-section {
    padding: 80px 0;
}

.contact-form-wrapper {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.contact-form .form-group {
    margin-bottom: 25px;
}

.contact-form label {
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

.contact-form .form-control {
    height: 50px;
    padding: 10px 15px;
    border: 2px solid #e5e5e5;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.contact-form .form-control:focus {
    border-color: #fdbe33;
    box-shadow: 0 0 0 3px rgba(253, 190, 51, 0.1);
    outline: none;
}

.contact-form textarea.form-control {
    height: auto;
    resize: vertical;
}

.contact-form select.form-control {
    height: 50px;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 16px;
}

.contact-form .form-check {
    margin-bottom: 25px;
}

.contact-form .form-check-label {
    font-weight: 400;
    color: #666;
}

.contact-form .form-check-input {
    margin-top: 6px;
}

.btn-submit {
    width: 100%;
    padding: 15px;
    font-size: 16px;
    font-weight: 600;
    background: linear-gradient(135deg, #fdbe33, #e6a400);
    border: none;
    border-radius: 8px;
    color: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-submit::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s ease;
}

.btn-submit:hover {
    background: linear-gradient(135deg, #e6a400, #fdbe33);
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(253, 190, 51, 0.4);
}

.btn-submit:hover::before {
    left: 100%;
}

.btn-submit:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

/* Map Section */
.map-wrapper {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.map-container {
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 30px;
}

.map-container iframe {
    display: block;
}

/* Business Hours */
.business-hours {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 8px;
}

.business-hours h4 {
    margin-bottom: 20px;
    color: #333;
    display: flex;
    align-items: center;
    gap: 10px;
}

.hours-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.hour-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #e5e5e5;
}

.hour-item:last-child {
    border-bottom: none;
}

.hour-item.emergency {
    background: #fff3e0;
    padding: 12px;
    border-radius: 5px;
    margin-top: 10px;
}

.hour-item.emergency .day {
    color: #fdbe33;
    font-weight: 600;
}

.hour-item.emergency .time {
    color: #333;
    font-weight: 600;
}

.day {
    color: #666;
    font-weight: 500;
}

.time {
    color: #333;
    font-weight: 600;
}

/* FAQ Section */
.faq-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.faq-item {
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.faq-item:hover {
    transform: translateX(5px);
    box-shadow: 0 5px 20px rgba(253, 190, 51, 0.15);
}

.faq-item h4 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
    display: flex;
    align-items: center;
    gap: 10px;
}

.faq-item h4 i {
    color: #fdbe33;
}

.faq-item p {
    color: #666;
    line-height: 1.6;
    margin: 0;
    padding-left: 30px;
}

.btn-outline-primary {
    border: 2px solid #fdbe33;
    color: #fdbe33;
    padding: 10px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background: #fdbe33;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(253, 190, 51, 0.3);
}

/* Newsletter Section */
.newsletter-section {
    padding: 60px 0;
    background: linear-gradient(135deg, #fdbe33, #e6a400);
}

.newsletter-wrapper {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 10px;
    color: #fff;
}

.newsletter-wrapper h3 {
    color: #fff;
    margin-bottom: 10px;
    font-size: 24px;
}

.newsletter-wrapper p {
    color: #fff;
    opacity: 0.9;
    margin: 0;
}

.newsletter-form .input-group {
    background: #fff;
    border-radius: 50px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

.newsletter-form .form-control {
    border: none;
    padding: 15px 20px;
    height: auto;
    font-size: 16px;
}

.newsletter-form .form-control:focus {
    box-shadow: none;
}

.newsletter-form .btn {
    padding: 15px 30px;
    border-radius: 50px;
    background: #333;
    color: #fff;
    font-weight: 600;
    border: none;
    transition: all 0.3s ease;
}

.newsletter-form .btn:hover {
    background: #fdbe33;
}

.newsletter-form small {
    display: block;
    margin-top: 10px;
    color: #fff;
    opacity: 0.8;
}

/* Alert Messages */
.alert {
    border-radius: 8px;
    padding: 15px 20px;
    margin-bottom: 30px;
    border: none;
    font-weight: 500;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border-left: 5px solid #28a745;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    border-left: 5px solid #dc3545;
}

/* Responsive Design */
@media (max-width: 991px) {
    .contact-form-wrapper,
    .map-wrapper {
        margin-bottom: 30px;
    }
    
    .contact-info-card {
        margin-bottom: 30px;
    }
    
    .newsletter-wrapper {
        text-align: center;
    }
    
    .newsletter-wrapper .col-lg-6:first-child {
        margin-bottom: 20px;
    }
}

@media (max-width: 767px) {
    .contact-info-section,
    .contact-form-section,
    .faq-section,
    .newsletter-section {
        padding: 50px 0;
    }
    
    .contact-form-wrapper,
    .map-wrapper {
        padding: 25px;
    }
    
    .contact-icon {
        width: 60px;
        height: 60px;
    }
    
    .contact-icon i {
        font-size: 25px;
    }
    
    .contact-info-card h3 {
        font-size: 20px;
    }
    
    .faq-item h4 {
        font-size: 16px;
    }
    
    .faq-item p {
        padding-left: 0;
        margin-top: 10px;
    }
    
    .newsletter-form .btn {
        padding: 15px 20px;
    }
}

@media (max-width: 480px) {
    .hour-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 5px;
    }
    
    .contact-form .row .col-md-6 {
        margin-bottom: 0;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Form submission handling
    $('#contactForm').on('submit', function() {
        var btn = $('#submitBtn');
        btn.prop('disabled', true);
        btn.find('.btn-text').hide();
        btn.find('.btn-loader').show();
    });

    // Phone number formatting (optional)
    $('#phone').on('input', function() {
        var phone = $(this).val().replace(/\D/g, '');
        if (phone.length > 10) {
            phone = phone.substr(0, 10);
        }
        if (phone.length > 6) {
            phone = phone.substr(0, 3) + '-' + phone.substr(3, 3) + '-' + phone.substr(6);
        } else if (phone.length > 3) {
            phone = phone.substr(0, 3) + '-' + phone.substr(3);
        }
        $(this).val(phone);
    });

    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 5000);

    // Smooth scroll to form if there are errors
    @if($errors->any())
        $('html, body').animate({
            scrollTop: $('.contact-form-wrapper').offset().top - 100
        }, 500);
    @endif
});
</script>
@endpush