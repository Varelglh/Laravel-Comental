<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika tabel bernama 'musik')
    protected $table = 'musik';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'judul',
        'artis',
        'genre',
        'file_path',
    ];
}
