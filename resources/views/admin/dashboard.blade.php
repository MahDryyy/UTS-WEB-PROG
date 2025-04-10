@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Admin Dashboard</h2>

    <div class="row">
        <!-- Card Projects -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">Kelola daftar proyek.</p>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Lihat
                    </a>
                    <a href="{{ route('projects.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Skills -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Skills</h5>
                    <p class="card-text">Kelola daftar keahlian.</p>
                    <a href="{{ route('skills.index') }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Lihat
                    </a>
                    <a href="{{ route('skills.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </a>
                </div>
            </div>
        </div>

        <!-- Card About -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">About</h5>
                    <p class="card-text">Edit informasi tentang diri Anda.</p>
                    <a href="{{ route('about.edit') }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Education -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Education</h5>
                    <p class="card-text">Kelola riwayat pendidikan.</p>
                    <a href="{{ route('education.index') }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Lihat
                    </a>
                    <a href="{{ route('education.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
