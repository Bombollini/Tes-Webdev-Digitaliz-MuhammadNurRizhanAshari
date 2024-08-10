@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Kursus</h1>
        <a href="{{ route('kursus.create') }}" class="btn btn-primary">Buat Kursus Baru</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Durasi (Jam)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kursus as $k)
            <tr>
                <td>{{ $k->judul }}</td>
                <td>{{ $k->deskripsi }}</td>
                <td>{{ $k->durasi }}</td>
                <td>
                    <a href="{{ route('kursus.show', $k->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('kursus.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kursus.destroy', $k->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
