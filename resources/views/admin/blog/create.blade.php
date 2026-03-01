@extends('layouts.admin')

@section('title', 'Create Blog Post - Aseno-Tek Admin')

@section('content')
    <h3 class="mb-3">Create Blog Post</h3>
    <div class="card card-stat">
        <div class="card-body">
            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @include('admin.blog._form', ['buttonText' => 'Create Post'])
            </form>
        </div>
    </div>
@endsection
