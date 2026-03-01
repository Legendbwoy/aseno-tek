@extends('layouts.app')

@section('title', 'Get A Quote - Aseno-Tek Construction')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Get A Quote</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">Quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="p-4 bg-light rounded">
                        <h3 class="mb-3">Request a Project Quote</h3>
                        <p class="mb-4">Tell us what you need and our team will respond with a tailored quotation.</p>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Service</label>
                                    <input type="text" name="service" class="form-control" placeholder="Construction, renovation, cleaning...">
                                </div>
                                <div class="form-group col-12">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" value="Quote Request" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Project Details</label>
                                    <textarea name="message" class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="privacy" name="privacy" required>
                                        <label class="form-check-label" for="privacy">
                                            I agree to be contacted.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn">Send Quote Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
