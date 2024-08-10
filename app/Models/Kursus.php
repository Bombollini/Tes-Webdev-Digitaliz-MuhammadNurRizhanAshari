<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    // Tentukan atribut yang bisa diisi secara massal
    protected $fillable = [
        'judul',
        'deskripsi',
        'durasi'
    ];
    // Tentukan nama tabel
    protected $table = 'kursus';
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
