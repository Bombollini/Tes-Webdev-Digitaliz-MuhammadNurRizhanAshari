<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;


Route::controller(KursusController::class)
    ->group(function () {
        // Route untuk halaman utama atau daftar kursus
        Route::get('/', 'index')->name('kursus.index');

        // Route untuk membuat kursus baru
        Route::get('/kursus/create', 'create')->name('kursus.create');
        Route::post('/kursus', 'store')->name('kursus.store');
        // Route untuk melihat detail kursus
        Route::get('/kursus/{kursus}', 'show')->name('kursus.show');

        // Route untuk mengedit kursus
        Route::get('/kursus/{kursus}/edit',  'edit')->name('kursus.edit');
        Route::put('/kursus/{kursus}', 'update')->name('kursus.update');

        // Route untuk menghapus kursus
        Route::delete('/kursus/{kursus}', 'destroy')->name('kursus.destroy');
    });

Route::controller(MateriController::class)->group(function () {
    // Route untuk melihat daftar materi dalam sebuah kursus
    Route::get('/kursus/{kursus}/materi', 'index')->name('kursus.materi.index');

    // Route untuk menambahkan materi baru ke kursus
    Route::get('/kursus/{kursus}/materi/create',  'create')->name('kursus.materi.create');
    Route::post('/kursus/{kursus}/materi', 'store')->name('kursus.materi.store');

    // Route untuk melihat detail materi dalam sebuah kursus
    Route::get('/kursus/{kursus}/materi/{materi}',  'show')->name('kursus.materi.show');

    // Route untuk mengedit materi dalam sebuah kursus
    Route::get('/kursus/{kursus}/materi/{materi}/edit',  'edit')->name('kursus.materi.edit');
    Route::put('/kursus/{kursus}/materi/{materi}',  'update')->name('kursus.materi.update');

    // Route untuk menghapus materi dalam sebuah kursus
    Route::delete('/kursus/{kursus}/materi/{materi}',  'destroy')->name('kursus.materi.destroy');
});
