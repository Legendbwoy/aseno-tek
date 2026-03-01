@extends('layouts.admin')

@section('title', 'Gallery Management - Aseno-Tek Admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Gallery Management</h3>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-dark">Add Gallery Item</a>
    </div>

    <form class="form-row mb-3" method="GET" action="{{ route('admin.gallery.index') }}">
        <div class="col-md-5 mb-2">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search title, category, location">
        </div>
        <div class="col-md-3 mb-2">
            <select class="form-control" name="status">
                <option value="">All Statuses</option>
                <option value="published" {{ $status === 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ $status === 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
        </div>
        <div class="col-md-4 mb-2">
            <button class="btn btn-outline-secondary mr-2" type="submit">Filter</button>
            <a class="btn btn-outline-light border" href="{{ route('admin.gallery.index') }}">Reset</a>
        </div>
    </form>

    <div class="card card-stat">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Category</th>
                        <th>Featured</th>
                        <th>Status</th>
                        <th>Sort</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $item->image_path ? (str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/' . $item->image_path)) : asset('assets/img/portfolio-1.jpg') }}" alt="{{ $item->title }}" style="width:48px;height:48px;object-fit:cover;border-radius:6px;" class="mr-2">
                                    <div>
                                        <div>{{ $item->title }}</div>
                                        <small class="text-muted">{{ $item->project_location ?: 'No location' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $item->category ?: 'General' }}</td>
                            <td>{!! $item->is_featured ? '<span class="badge badge-warning">Yes</span>' : '<span class="badge badge-light border">No</span>' !!}</td>
                            <td>{!! $item->is_published ? '<span class="badge badge-success">Published</span>' : '<span class="badge badge-secondary">Draft</span>' !!}</td>
                            <td>{{ $item->sort_order }}</td>
                            <td class="text-right">
                                <a href="{{ route('gallery.item', $item->slug) }}" target="_blank" class="btn btn-sm btn-outline-info">View</a>
                                <a href="{{ route('admin.gallery.edit', $item) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.gallery.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this gallery item?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">No gallery items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $items->links() }}
    </div>
@endsection
