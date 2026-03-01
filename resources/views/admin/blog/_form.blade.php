@csrf

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Title *</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required>
        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-4">
        <label>Category</label>
        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category', $post->category) }}">
        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Slug (optional)</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}">
        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-6">
        <label>Author Name</label>
        <input type="text" name="author_name" class="form-control @error('author_name') is-invalid @enderror" value="{{ old('author_name', $post->author_name) }}">
        @error('author_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-group">
    <label>Excerpt</label>
    <textarea name="excerpt" rows="2" class="form-control @error('excerpt') is-invalid @enderror">{{ old('excerpt', $post->excerpt) }}</textarea>
    @error('excerpt') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-group">
    <label>Content *</label>
    <textarea name="content" rows="10" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $post->content) }}</textarea>
    @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Featured Image</label>
        <input type="file" name="featured_image" class="form-control-file @error('featured_image') is-invalid @enderror" accept="image/*">
        @error('featured_image') <div class="text-danger small">{{ $message }}</div> @enderror
        @if($post->featured_image)
            <div class="mt-2">
                <img src="{{ str_starts_with($post->featured_image, 'assets/') ? asset($post->featured_image) : asset('storage/' . $post->featured_image) }}" alt="Featured" style="max-width: 140px; border-radius: 6px;">
            </div>
            <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" id="remove_featured_image" name="remove_featured_image" value="1">
                <label class="form-check-label" for="remove_featured_image">Remove current image</label>
            </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label>Publish Date</label>
        <input type="datetime-local" name="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\\TH:i')) }}">
        @error('published_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="form-check mt-3">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" {{ old('is_published', $post->is_published) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Published</label>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Meta Title</label>
        <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title', $post->meta_title) }}">
        @error('meta_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-group col-md-6">
        <label>Meta Description</label>
        <input type="text" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" value="{{ old('meta_description', $post->meta_description) }}">
        @error('meta_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<button type="submit" class="btn btn-dark">{{ $buttonText }}</button>
<a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary">Cancel</a>
