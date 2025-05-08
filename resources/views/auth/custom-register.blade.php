<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Comental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleKategoriPsikolog() {
            const role = document.getElementById('role').value;
            const kategoriDiv = document.getElementById('kategori-psikolog-div');
            if (role === 'psikolog') {
                kategoriDiv.style.display = 'block';
            } else {
                kategoriDiv.style.display = 'none';
            }
        }
    </script>
</head>

<body class="bg-green-50">
    <div class="container mx-auto p-6 max-w-md">
        <h2 class="text-3xl font-bold text-center text-green-800 mb-6">Buat Akun Baru</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <!-- Form Registrasi -->
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf

                <!-- Nama Lengkap -->
                <div class="mb-6">
                    <label for="nama" class="block text-lg font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap"
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="Contoh: email@domain.com"
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-lg font-medium text-gray-700">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi Anda"
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-lg font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi Anda"
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                </div>

                <!-- Pilihan Role -->
                <div class="mb-6">
                    <label for="role" class="block text-lg font-medium text-gray-700">Daftar Sebagai</label>
                    <select id="role" name="role" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required onchange="toggleKategoriPsikolog()">
                        <option value="psikolog">Psikolog</option>
                        <option value="pasien">Pasien</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Kategori Psikolog (Tampilkan hanya jika role adalah psikolog) -->
                <div id="kategori-psikolog-div" class="mb-6" style="display: none;">
                    <label for="kategori-psikolog" class="block text-lg font-medium text-gray-700">Kategori Psikolog</label>
                    <select id="kategori-psikolog" name="kategori-psikolog" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option value="psikolog_klinis">Psikolog Klinis</option>
                        <option value="psikolog_anak">Psikolog Anak</option>
                        <option value="psikolog_keluarga">Psikolog Keluarga</option>
                    </select>
                </div>

                <!-- Tombol Daftar -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition duration-200 text-center">
                        Daftar
                    </button>
                </div>
            </form>

            <!-- Tautan ke halaman login -->
            <div class="text-center mt-4">
                <p class="text-gray-700">Sudah memiliki akun? <a href="{{ route('login.custom') }}" class="text-green-500 hover:text-green-700">Masuk Sekarang</a></p>
            </div>
        </div>
    </div>

    <br><br>

<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Kolom 1: Logo dan Deskripsi Singkat -->
        <div class="flex flex-col items-center sm:items-start">
            <div class="text-3xl font-bold text-green-500 mb-4">Comental</div>
            <p class="text-gray-400 text-center sm:text-left mb-4">
                Platform kesehatan mental yang menyediakan layanan konsultasi, forum, Video Edukasi, dan terapi berbasis teknologi.
            </p>
        </div>

        <!-- Kolom 2: Layanan -->
        <div class="flex flex-col items-center sm:items-start">
            <h3 class="text-xl font-semibold mb-4">Fitur</h3>
            <ul>
                <li><a href="#" class="text-gray-400 hover:text-green-500">Konsultasi Kesehatan Mental</a></li>
                <li><a href="#" class="text-gray-400 hover:text-green-500">Forum Online</a></li>
                <li><a href="#" class="text-gray-400 hover:text-green-500">Musik Terapi</a></li>
                <li><a href="#" class="text-gray-400 hover:text-green-500">Video Edukasi</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Kontak -->
        <div class="flex flex-col items-center sm:items-start">
            <h3 class="text-xl font-semibold mb-4">Kontak</h3>
            <ul>
                <li class="text-gray-400">Email: <a href="mailto:support@halodoc.com" class="text-green-500">comental@gmail.com</a></li>
                <li class="text-gray-400">Telepon: +62 83176552706</li>
                <li class="text-gray-400">Alamat: Bandung, Indonesia</li>
            </ul>
        </div>

        <!-- Kolom 4: Langganan Newsletter -->
        <div class="flex flex-col items-center sm:items-start">
            <h3 class="text-xl font-semibold mb-4">Langganan</h3>
            <p class="text-gray-400 mb-4">Dapatkan update terkini tentang layanan dan artikel kesehatan mental.</p>
            <form action="#" class="flex space-x-4">
                <input type="email" placeholder="Masukkan Email Anda" class="px-4 py-2 text-gray-700 rounded-l-lg focus:outline-none">
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-r-lg hover:bg-green-700 transition">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</footer>


</body>

</html>
