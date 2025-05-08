<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Comental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/material-icons@latest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gradient-to-r from-green-400 to-green-600 min-h-screen flex flex-col justify-between items-center">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg mt-32"> <!-- Diberikan mt-32 agar lebih turun -->
        <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Masuk ke Akun Anda</h2>


        <!-- Pesan Kesalahan -->
        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form Masuk -->
        <form action="{{ route('login.custom') }}" method="POST">
            @csrf
            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Contoh: email@domain.com"
                    class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Kata Sandi -->
            <div class="mb-6">
                <label for="password" class="block text-lg font-medium text-gray-700">Kata Sandi</label>
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi Anda"
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    <button type="button" id="togglePassword" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <i id="toggleIcon" class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Tombol Masuk -->
            <div class="mb-6 flex justify-center">
                <button type="submit" class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition duration-200 text-center">
                    Masuk
                </button>
            </div>
        </form>

        <!-- Tautan ke halaman registrasi -->
        <div class="text-center">
            <p class="text-gray-700">Belum memiliki akun? <a href="{{ route('register.custom') }}" class="text-green-500 hover:text-green-700">Daftar Sekarang</a></p>
        </div>
    </div>
    <br><br>
    <footer class="bg-gray-900 text-white py-12 mt-auto w-full">
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

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        togglePassword.addEventListener('click', function () {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            toggleIcon.className = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        });
    </script>
</body>

</html>
