@extends('layouts.admin')

@section('title', 'Blog Management - Aseno-Tek Admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Blog Management</h3>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-dark">Add New Post</a>
    </div>

    <form class="form-row mb-3" method="GET" action="{{ route('admin.blog.index') }}">
        <div class="col-md-5 mb-2">
            <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search title, excerpt, category">
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
            <a class="btn btn-outline-light border" href="{{ route('admin.blog.index') }}">Reset</a>
        </div>
    </form>

    <div class="card card-stat">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category ?: 'General' }}</td>
                            <td>
                                @if($post->is_published)
                                    <span class="badge badge-success">Published</span>
                                @else
                                    <span class="badge badge-secondary">Draft</span>
                                @endif
                            </td>
                            <td>{{ optional($post->published_at)->format('Y-m-d H:i') ?: '-' }}</td>
                            <td class="text-right">
                                <a href="{{ route('blog.single', $post->slug) }}" target="_blank" class="btn btn-sm btn-outline-info">View</a>
                                <a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No blog posts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $posts->links() }}
    </div>
@endsection
