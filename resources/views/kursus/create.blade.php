@extends('layouts.app')

@section('title', 'Buat Kursus Baru')

@section('content')
    <h1>Buat Kursus Baru</h1>

    <form action="{{ route('kursus.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi (Jam)</label>
            <input type="number" class="form-control" id="durasi" name="durasi" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kursus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
