@extends('layouts.app')

@section('title', 'Edit Kursus')

@section('content')
    <h1>Edit Kursus</h1>

    <form action="{{ route('kursus.update', $kursus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $kursus->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $kursus->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi (Jam)</label>
            <input type="number" class="form-control" id="durasi" name="durasi" value="{{ $kursus->durasi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kursus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
