@extends('layouts.admin')

@section('title', 'Edit Gallery Item - Aseno-Tek Admin')

@section('content')
    <h3 class="mb-3">Edit Gallery Item</h3>
    <div class="card card-stat">
        <div class="card-body">
            <form action="{{ route('admin.gallery.update', $item) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.gallery._form', ['buttonText' => 'Update Item'])
            </form>
        </div>
    </div>
@endsection
