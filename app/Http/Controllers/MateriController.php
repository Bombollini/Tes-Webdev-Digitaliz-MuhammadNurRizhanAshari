<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Models\Kursus;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Kursus $kursus)
    {
        $materi = $kursus->materi;
        return view('materi.index', compact('kursus', 'materi'));
    }

    public function create(Kursus $kursus)
    {
        return view('materi.create', compact('kursus'));
    }

    public function store(Request $request, Kursus $kursus)
    {
        $kursus->materi()->create($request->all());
        return redirect()->route('kursus.materi.index', $kursus);
    }

    public function show(Kursus $kursus, Materi $materi)
    {
        return view('materi.show', compact('kursus', 'materi'));
    }

    public function edit(Kursus $kursus, Materi $materi)
    {
        return view('materi.edit', compact('kursus', 'materi'));
    }

    public function update(Request $request, Kursus $kursus, Materi $materi)
    {
        $materi->update($request->all());
        return redirect()->route('kursus.materi.index', $kursus);
    }

    public function destroy(Kursus $kursus, Materi $materi)
    {
        $materi->delete();
        return redirect()->route('kursus.materi.index', $kursus);
    }
}
