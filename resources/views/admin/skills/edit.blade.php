@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Skill</h2>

    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Skill</label>
            <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Level (%)</label>
            <input type="number" name="level" class="form-control" value="{{ $skill->level }}" min="0" max="100" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
