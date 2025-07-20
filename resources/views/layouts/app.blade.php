<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi KRS')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans h-screen flex">

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

    <!-- Main Content + Navbar Atas -->
    <div class="flex-1 flex flex-col">

        <!-- Top Navbar (Profile & Logout) -->
        <nav class="bg-white shadow px-4 py-3 flex justify-end items-center border-b">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    @auth
    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}">
    <strong>{{ Auth::user()->name }}</strong>
@else
    <img src="https://ui-avatars.com/api/?name=Guest">
    <strong>Guest</strong>
@endauth

                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small">
                    <li><h6 class="dropdown-header">{{ Auth::user()->email }}</h6></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">🔒 Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Halaman Konten -->
        <main class="p-6 overflow-y-auto">
            @yield('content')
        </main>

    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
