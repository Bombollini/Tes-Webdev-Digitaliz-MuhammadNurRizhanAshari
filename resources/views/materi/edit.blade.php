@extends('layouts.app')

@section('title', 'Edit Materi')

@section('content')
    <h1>Edit Materi untuk Kursus: {{ $kursus->judul }}</h1>

    <form action="{{ route('kursus.materi.update', [$kursus->id, $materi->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $materi->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $materi->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="link_embed" class="form-label">Link Embed</label>
            <input type="text" class="form-control" id="link_embed" name="link_embed" value="{{ $materi->link_embed }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kursus.materi.index', $kursus->id) }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
