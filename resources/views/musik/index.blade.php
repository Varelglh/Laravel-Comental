@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">🎵 Daftar Musik</h1>

    <!-- Tombol untuk Menambah Musik Baru -->
    <a href="{{ route('musik.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">+ Tambah Musik</a>

    <!-- Tabel Daftar Musik -->
    <table class="w-full table-auto border-collapse border border-gray-300 mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b text-left">Judul</th>
                <th class="px-4 py-2 border-b text-left">Artis</th>
                <th class="px-4 py-2 border-b text-left">Genre</th>
                <th class="px-4 py-2 border-b text-left">File Musik</th>
                <th class="px-4 py-2 border-b text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($musik as $item)
            <tr>
                <td class="px-4 py-2 border-b">{{ $item->judul }}</td>
                <td class="px-4 py-2 border-b">{{ $item->artis }}</td>
                <td class="px-4 py-2 border-b">{{ $item->genre }}</td>
                <td class="px-4 py-2 border-b">
                    <audio controls>
                        <source src="{{ Storage::url($item->file_path) }}" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                </td>
                <td class="px-4 py-2 border-b">
                    <a href="{{ route('musik.edit', $item->id) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                    <form action="{{ route('musik.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus musik ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600 ml-4">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
