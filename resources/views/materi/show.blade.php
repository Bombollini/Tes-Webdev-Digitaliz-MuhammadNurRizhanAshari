@extends('layouts.app')

@section('title', 'Detail Materi')

@section('content')
    <h1>Detail Materi</h1>

    <div class="mb-3">
        <strong>Judul:</strong> {{ $materi->judul }}
    </div>
    <div class="mb-3">
        <strong>Deskripsi:</strong> {{ $materi->deskripsi }}
    </div>
    <div class="mb-3">
        <strong>Link Embed:</strong> 
        <br><iframe src="{{ $materi->link_embed }})" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
    </div>
    <a href="{{ route('kursus.materi.index', $kursus->id) }}" class="btn btn-secondary">Kembali ke Materi</a>
@endsection
