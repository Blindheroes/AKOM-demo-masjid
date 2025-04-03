<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'News')</title>
    @vite('resources/css/app.css')
    @yield('meta')
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header / Navbar -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="{{ url('/') }}" class="text-2xl font-semibold text-blue-600">AKOM News</a>
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                ☰
            </button>
            <nav id="menu" class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ url('/news') }}" class="text-gray-700 hover:text-blue-600">News</a>
                <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-600">About</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6 ">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md mt-10 py-6 text-center">
        <p class="text-gray-600">&copy; {{ date('Y') }} AKOM News. All rights reserved.</p>
    </footer>

    <!-- Script for Mobile Menu -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            let menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>