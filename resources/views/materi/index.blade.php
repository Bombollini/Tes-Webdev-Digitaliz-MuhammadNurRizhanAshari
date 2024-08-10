@extends('layouts.app')

@section('title', 'Daftar Materi')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Materi untuk Kursus: {{ $kursus->judul }}</h1>
        <a href="{{ route('kursus.materi.create', $kursus->id) }}" class="btn btn-primary">Tambah Materi</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Link Embed</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materi as $m)
            <tr>
                <td>{{ $m->judul }}</td>
                <td>{{ $m->deskripsi }}</td>
                <td>{{ $m->link_embed }}</td>
                <td>
                    <a href="{{ route('kursus.materi.show', [$kursus->id, $m->id]) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('kursus.materi.edit', [$kursus->id, $m->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kursus.materi.destroy', [$kursus->id, $m->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('kursus.show', $kursus->id) }}" class="btn btn-secondary mt-4">Kembali ke Kursus</a>
@endsection
