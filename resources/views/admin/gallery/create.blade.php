@extends('layouts.admin')

@section('title', 'Create Gallery Item - Aseno-Tek Admin')

@section('content')
    <h3 class="mb-3">Create Gallery Item</h3>
    <div class="card card-stat">
        <div class="card-body">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @include('admin.gallery._form', ['buttonText' => 'Create Item'])
            </form>
        </div>
    </div>
@endsection
