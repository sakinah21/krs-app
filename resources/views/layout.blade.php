<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'KRS App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-800 text-white flex flex-col">
        <div class="p-6 text-center text-2xl font-bold border-b border-blue-600">
            KRS App
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="/dashboard" class="block px-4 py-2 rounded hover:bg-blue-700">📊 Dashboard</a>
            <a href="/" class="block px-4 py-2 rounded hover:bg-blue-700">🏠 Home</a>
            <a href="/krs" class="block px-4 py-2 rounded hover:bg-blue-700">📝 Pengisian KRS</a>
            <a href="/mahasiswa" class="block px-4 py-2 rounded hover:bg-blue-700">🎓 Data Mahasiswa</a>
            <a href="/matakuliah" class="block px-4 py-2 rounded hover:bg-blue-700">📚 Data Mata Kuliah</a>
            <a href="/settings" class="block px-4 py-2 rounded hover:bg-blue-700">⚙️ Settings</a>
            <a href="/help" class="block px-4 py-2 rounded hover:bg-blue-700">❓ Help</a>
        </nav>
        <div class="p-4 text-sm border-t border-blue-600 text-center">
            © 2025 KRS App
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 overflow-y-auto">
        @yield('content')
    </main>

    @yield('scripts')
</body>
</html>
