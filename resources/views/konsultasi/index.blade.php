@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-green-600">Daftar Konsultasi</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('konsultasi.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mb-4 inline-block">Tambah Konsultasi</a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="bg-green-600 text-white">
                    <th class="py-2 px-4">#</th>
                    <th class="py-2 px-4">Nama Pasien</th>
                    <th class="py-2 px-4">Psikolog</th>
                    <th class="py-2 px-4">Tanggal</th>
                    <th class="py-2 px-4">Jam</th>
                    <th class="py-2 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($konsultasis as $konsultasi)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $loop->iteration + ($konsultasis->currentPage() - 1) * $konsultasis->perPage() }}</td>
                        <td class="py-2 px-4">{{ $konsultasi->nama_pasien }}</td>
                        <td class="py-2 px-4">{{ $konsultasi->psikolog }}</td>
                        <td class="py-2 px-4">{{ $konsultasi->tanggal }}</td>
                        <td class="py-2 px-4">{{ $konsultasi->jam }}</td>
                        <td class="py-2 px-4 space-x-2">
                            <a href="{{ route('konsultasi.edit', $konsultasi->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('konsultasi.destroy', $konsultasi->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data konsultasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $konsultasis->links() }}
    </div>
</div>
@endsection
