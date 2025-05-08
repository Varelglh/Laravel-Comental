<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.custom-register'); // pastikan view yang benar sesuai nama file kamu
    }

    // Menangani proses pendaftaran pengguna
    public function register(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:psikolog,pasien,admin'],
            'kategori-psikolog' => ['nullable', 'string', 'in:psikolog_klinis,psikolog_anak,psikolog_keluarga'],
        ]);

        // Simpan data pengguna baru
        $user = User::create([
            'name' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'kategori_psikolog' => $validated['kategori-psikolog'] ?? null, // nullable untuk psikolog
        ]);

        // Login pengguna setelah pendaftaran
        auth()->login($user);

        // Arahkan ke dashboard atau halaman beranda
        return redirect()->route('login.custom')->with('success', 'Pendaftaran berhasil, silakan masuk.');

    }
}
