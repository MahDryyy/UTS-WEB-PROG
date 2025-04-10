@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Education</h2>

    <a href="{{ route('education.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Tambah
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Institusi</th>
                <th>Gelar</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($educations as $edu)
            <tr>
                <td>{{ $edu->institution }}</td>
                <td>{{ $edu->degree }}</td>
                <td>{{ $edu->year }}</td>
                <td>
                    <a href="{{ route('education.edit', $edu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('education.destroy', $edu->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data pendidikan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
