@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Project</h2>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Project Title</label>
                <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Project Image</label>
                <input type="file" name="image" class="form-control">
                @if ($project->image)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $project->image) }}" width="150">
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Project URL</label>
                <input type="url" name="url" class="form-control" value="{{ $project->url }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection
