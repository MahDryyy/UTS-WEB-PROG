@extends('admin.layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Education</h2>

        <form action="{{ route('education.update', $education->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Degree</label>
                <input type="text" name="degree" class="form-control" value="{{ $education->degree }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Institution</label>
                <input type="text" name="institution" class="form-control" value="{{ $education->institution }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Year</label>
                <input type="number" name="year" class="form-control" value="{{ $education->year }}" min="1900" max="2099" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description (Opsional)</label>
                <textarea name="description" class="form-control">{{ $education->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('education.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
