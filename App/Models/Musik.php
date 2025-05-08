<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;

    // Pastikan menggunakan nama tabel yang benar
    protected $table = 'musik';  // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'judul',
        'artis',
        'genre',
        'file_path',
    ];
}
