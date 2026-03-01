@csrf

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Title *</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $item->title) }}" required>
        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-4">
        <label>Category</label>
        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category', $item->category) }}">
        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Slug (optional)</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $item->slug) }}">
        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-6">
        <label>Project Location</label>
        <input type="text" name="project_location" class="form-control @error('project_location') is-invalid @enderror" value="{{ old('project_location', $item->project_location) }}">
        @error('project_location') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-group">
    <label>Description</label>
    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $item->description) }}</textarea>
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Image {{ $item->exists ? '' : '*' }}</label>
        <input type="file" name="image_path" class="form-control-file @error('image_path') is-invalid @enderror" accept="image/*" {{ $item->exists ? '' : 'required' }}>
        @error('image_path') <div class="text-danger small">{{ $message }}</div> @enderror
        @if($item->image_path)
            <div class="mt-2">
                <img src="{{ str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/' . $item->image_path) }}" alt="Project Image" style="max-width: 140px; border-radius: 6px;">
            </div>
            <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" id="remove_image_path" name="remove_image_path" value="1">
                <label class="form-check-label" for="remove_image_path">Remove current image</label>
            </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        <label>Completed At</label>
        <input type="date" name="completed_at" class="form-control @error('completed_at') is-invalid @enderror" value="{{ old('completed_at', optional($item->completed_at)->format('Y-m-d')) }}">
        @error('completed_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-3">
        <label>Sort Order</label>
        <input type="number" min="0" name="sort_order" class="form-control @error('sort_order') is-invalid @enderror" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
        @error('sort_order') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-row mb-3">
    <div class="col-md-3">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $item->is_featured) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_featured">Featured</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" {{ old('is_published', $item->exists ? $item->is_published : true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Published</label>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-dark">{{ $buttonText }}</button>
<a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">Cancel</a>
