<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comental - @yield('title', 'Aplikasi Konsultasi')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <div class="text-xl font-bold text-green-600">Comental</div>
        <div class="space-x-4">
            <a href="{{ route('home') }}" class="hover:text-green-600">Beranda</a>
            <a href="{{ route('konsultasi.index') }}" class="hover:text-green-600">Konsultasi</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="text-red-500 hover:text-red-600">Logout</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </nav>

    <!-- Konten Utama -->
    <main class="p-6">
        @yield('content')
    </main>

   

</body>
</html>
