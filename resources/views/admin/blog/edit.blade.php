@extends('layouts.admin')

@section('title', 'Edit Blog Post - Aseno-Tek Admin')

@section('content')
    <h3 class="mb-3">Edit Blog Post</h3>
    <div class="card card-stat">
        <div class="card-body">
            <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.blog._form', ['buttonText' => 'Update Post'])
            </form>
        </div>
    </div>
@endsection
