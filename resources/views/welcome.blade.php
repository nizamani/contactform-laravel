<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer Teams</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        @vite(['resources/css/app.css'])
    @endif
</head>
<body class="bg-green-100">
    <nav class="bg-green-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-bold">Soccer Teams</h1>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="text-white px-4 py-2">Login</a>
                    <a href="{{ route('register') }}" class="text-white px-4 py-2">Register</a>
                @else
                    <span class="text-white">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white px-4 py-2">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>
    
    <header class="text-center py-20 bg-cover bg-center min-h-screen" style="background-image: url('images/soccer.jpg');">
        <h2 class="text-4xl text-white font-bold bg-black bg-opacity-50 px-4 py-2 inline-block">Welcome to Soccer Teams</h2>
        <p class="text-white text-lg mt-2 bg-black bg-opacity-50 px-4 py-2 inline-block">Discover and follow your favorite soccer teams</p>
    </header>

    <section class="container mx-auto py-10 px-4">
        <h3 class="text-3xl font-bold text-green-700 text-center mb-6">Featured Teams</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold text-green-700">Team A</h4>
                <p class="text-gray-600">A top-tier soccer team with a great history.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold text-green-700">Team B</h4>
                <p class="text-gray-600">Known for their amazing skills and teamwork.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold text-green-700">Team C</h4>
                <p class="text-gray-600">A rising star in the world of soccer.</p>
            </div>
        </div>
    </section>

    <footer class="bg-green-600 text-center text-white py-4">
        <p>&copy; {{ date('Y') }} Soccer Teams. All rights reserved.</p>
    </footer>
</body>
</html>
