<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsultasis = Konsultasi::latest()->paginate(10); // menampilkan 10 per halaman
        return view('konsultasi.index', compact('konsultasis'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konsultasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'psikolog' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'keluhan' => 'nullable|string',
        ]);

        Konsultasi::create($request->all());

        return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        return view('konsultasi.show', compact('konsultasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        return view('konsultasi.edit', compact('konsultasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $konsultasi = Konsultasi::findOrFail($id);

    $konsultasi->nama_pasien = $request->nama_pasien;
    $konsultasi->psikolog = $request->psikolog;
    $konsultasi->tanggal = $request->tanggal;
    $konsultasi->jam = $request->jam;

    $konsultasi->save();

    return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil diupdate.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $konsultasi->delete();

        return redirect()->route('konsultasi.index')->with('success', 'Konsultasi berhasil dihapus.');
    }
}
