<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    // Daftar kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'nama_pasien',
        'psikolog',
        'tanggal',
        'jam',
        'keluhan',
    ];
}
