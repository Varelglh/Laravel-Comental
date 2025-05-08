<?php

namespace App\Http\Controllers;

use App\Models\Musik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusikController extends Controller
{
    // Menampilkan daftar musik
    public function index()
    {
        // Mengambil semua data musik
        $musik = Musik::all();
        // Menampilkan view dengan data musik
        return view('musik.index', compact('musik'));
    }

    // Menampilkan form untuk menambah musik baru
    public function create()
    {
        // Menampilkan halaman create
        return view('musik.create');
    }

    // Menyimpan musik baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'artis' => 'required|string|max:255',  // Pastikan artis wajib diisi
            'genre' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:mp3,wav,ogg|max:10240',  // Validasi file
        ]);

        // Menyimpan file musik
        $filePath = $request->file('file')->store('musik', 'public');

        // Membuat entri musik baru di database
        Musik::create([
            'judul' => $request->judul,
            'artis' => $request->artis,  // Menggunakan data artis yang telah diisi
            'genre' => $request->genre,
            'file_path' => $filePath, // Menyimpan lokasi file musik
        ]);

        // Mengarahkan ke halaman daftar musik dengan pesan sukses
        return redirect()->route('musik.index')->with('success', 'Musik berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit musik
    public function edit($id)
    {
        // Mengambil data musik berdasarkan ID
        $musik = Musik::findOrFail($id);
        // Menampilkan halaman edit dengan data musik
        return view('musik.edit', compact('musik'));
    }

    // Memperbarui data musik yang ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'artis' => 'required|string|max:255',  // Pastikan artis wajib diisi
            'genre' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:mp3,wav,ogg|max:10240',  // Validasi file jika diupload
        ]);

        // Mengambil data musik berdasarkan ID
        $musik = Musik::findOrFail($id);

        // Memperbarui data musik
        $musik->judul = $request->judul;
        $musik->artis = $request->artis;  // Perbarui artis
        $musik->genre = $request->genre;

        // Cek jika ada file musik yang diunggah
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            Storage::delete('public/' . $musik->file_path);

            // Simpan file baru
            $filePath = $request->file('file')->store('musik', 'public');
            $musik->file_path = $filePath;  // Perbarui path file musik
        }

        // Simpan perubahan data musik
        $musik->save();

        // Mengarahkan ke halaman daftar musik dengan pesan sukses
        return redirect()->route('musik.index')->with('success', 'Musik berhasil diperbarui!');
    }

    // Menghapus musik dari database
    public function destroy($id)
    {
        // Mengambil data musik berdasarkan ID
        $musik = Musik::findOrFail($id);

        // Hapus file musik dari storage
        Storage::delete('public/' . $musik->file_path);

        // Menghapus data musik dari database
        $musik->delete();

        // Mengarahkan ke halaman daftar musik dengan pesan sukses
        return redirect()->route('musik.index')->with('success', 'Musik berhasil dihapus!');
    }
}
