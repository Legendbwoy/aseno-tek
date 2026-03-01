@extends('layouts.app')

@section('title', 'FAQs - Aseno-Tek Construction')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="">FAQ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="faq py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="bg-light p-4 rounded h-100">
                        <h4>How long does a typical project take?</h4>
                        <p class="mb-0">Project duration depends on scope, approvals, and site conditions. We provide a detailed timeline during planning.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg-light p-4 rounded h-100">
                        <h4>Do you handle both residential and commercial work?</h4>
                        <p class="mb-0">Yes. We deliver residential builds, commercial renovations, and mixed-use projects.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg-light p-4 rounded h-100">
                        <h4>Can I request a site inspection before quotation?</h4>
                        <p class="mb-0">Yes. We can schedule a site assessment to improve budget and timeline accuracy.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg-light p-4 rounded h-100">
                        <h4>Do you offer post-delivery support?</h4>
                        <p class="mb-0">Yes, our team offers maintenance and post-handover support based on project terms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
