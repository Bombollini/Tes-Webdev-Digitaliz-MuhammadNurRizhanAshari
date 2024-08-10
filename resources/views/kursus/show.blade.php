@extends('layouts.app')

@section('title', 'Detail Kursus')

@section('content')
    <h1>Detail Kursus</h1>

    <div class="mb-3">
        <strong>Judul:</strong> {{ $kursus->judul }}
    </div>
    <div class="mb-3">
        <strong>Deskripsi:</strong> {{ $kursus->deskripsi }}
    </div>
    <div class="mb-3">
        <strong>Durasi:</strong> {{ $kursus->durasi }} Jam
    </div>
    <a href="{{ route('kursus.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('kursus.materi.index', $kursus->id) }}" class="btn btn-info">Lihat Materi</a>
@endsection
