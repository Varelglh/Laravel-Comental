<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comental - Beranda</title>
    <meta name="description" content="Comental adalah platform kesehatan mental yang menyediakan layanan konsultasi, terapi, forum, dan edukasi berbasis teknologi.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-green-400 to-green-600 text-gray-800">

    <!-- Navbar -->
    <header>
        <nav class="flex flex-wrap justify-between items-center p-6 bg-white shadow-md">
            <div class="text-2xl font-bold text-green-600">Comental</div>
            <div class="space-x-6">
                <a href="/" class="text-gray-700 hover:text-green-600">Beranda</a>
                <a href="#fitur" class="text-gray-700 hover:text-green-600">Fitur</a>
                <a href="#kontak" class="text-gray-700 hover:text-green-600">Kontak</a>
                <a href="/login" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Masuk</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="text-center py-28 px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Kesehatan Mental Lebih Mudah Diakses</h1>
            <p class="text-white text-lg max-w-2xl mx-auto mb-8">Comental adalah platform kesehatan mental yang menyediakan layanan konsultasi, terapi, dan edukasi berbasis teknologi.</p>
            <a href="/register" class="bg-white text-green-600 font-semibold px-6 py-3 rounded shadow hover:bg-gray-100">Mulai Sekarang</a>
        </section>

        <!-- Fitur -->
        <section id="fitur" class="bg-white py-20 px-6">
            <h2 class="text-3xl font-bold text-center text-green-600 mb-12">Fitur Utama</h2>
            <div class="grid md:grid-cols-3 gap-10 text-center">
                <!-- Konsultasi Online: Dapat diklik -->
                <a href="{{ route('konsultasi.index') }}" class="hover:shadow-lg transition p-4 rounded block bg-white hover:bg-gray-100">
                    <h3 class="text-xl font-semibold mb-2 text-green-600">Konsultasi Online</h3>
                    <p>Konsultasi dengan psikolog profesional dari mana saja.</p>
                </a>

                <!-- Forum Dukungan -->
                <div class="hover:shadow-lg transition p-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Forum Dukungan</h3>
                    <p>Berbagi cerita dan dukungan dengan komunitas yang peduli.</p>
                </div>

                <!-- Edukasi & Terapi -->
                <div class="hover:shadow-lg transition p-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Edukasi & Terapi</h3>
                    <p>Video edukatif, musik terapi, dan konten lainnya.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-6 mt-16">
        <div class="grid md:grid-cols-4 gap-10">
            <div>
                <h4 class="text-lg font-semibold text-green-500 mb-2">Comental</h4>
                <p class="text-sm">Platform kesehatan mental yang menyediakan layanan konsultasi, forum, Video Edukasi, dan terapi berbasis teknologi.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Fitur</h4>
                <ul class="text-sm space-y-1">
                    <li>Konsultasi Kesehatan Mental</li>
                    <li>Forum Online</li>
                    <li>Musik Terapi</li>
                    <li>Video Edukasi</li>
                </ul>
            </div>
            <div id="kontak">
                <h4 class="text-lg font-semibold mb-2">Kontak</h4>
                <p class="text-sm">Email: <a href="mailto:comental@gmail.com" class="text-green-400 hover:underline">comental@gmail.com</a></p>
                <p class="text-sm">Telepon: +62 83176552706</p>
                <p class="text-sm">Alamat: Bandung, Indonesia</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Langganan</h4>
                <p class="text-sm mb-2">Dapatkan update layanan dan artikel terbaru.</p>
                <form onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan!');">
                    <input type="email" placeholder="Masukkan Email Anda" required class="px-3 py-2 rounded text-black w-full mb-2">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 w-full">Kirim</button>
                </form>
            </div>
        </div>
    </footer>

</body>
</html>
