<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKonsultasi;

class JadwalKonsultasiController extends Controller
{
    public function index()
    {
        $jadwal = JadwalKonsultasi::all();
        return view('jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'psikolog' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required'
        ]);

        JadwalKonsultasi::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }
}
