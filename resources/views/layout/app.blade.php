<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title')</title>

</head>

<body class="bg-gray-950 text-white overflow-x-hidden">


    <!-- TOAST MESSAGE -->
    <div id="toast" class="fixed top-20 left-1/2 -translate-x-1/2 bg-cyan-500 px-6 py-3 rounded-lg hidden shadow-lg">
        Welcome
    </div>


    <!-- MOBILE NAVBAR -->
    <nav class="flex justify-between items-center bg-gray-900 px-6 py-4 relative z-40 md:hidden">

        <!-- Logo -->
        <div class="text-white font-bold text-xl">
            SlangApp
        </div>
        <button id="menuBtn" class="md:hidden text-2xl">
<i class="fa-solid fa-bars"></i>
</button>
        <!-- MOBILE MENU BUTTON -->
        <div id="mobileMenu"
            class="hidden flex-col bg-gray-900 absolute right-0 top-16 w-48 p-4 space-y-3 z-50 shadow-lg">

            <a href="/" class="block text-white">Home</a>
            <a href="/explore" class="block text-white">Explore</a>
            <a href="/about" class="block text-white">About</a>
            <a href="/addslang" class="block text-white">Add Slang</a>

            @guest
                <a href="/login" class="block text-white">Login</a>
                <a href="/register" class="block text-white">Register</a>
            @endguest

            @auth

                @if (Auth::user()->role == 'admin')
                    <a href="/admin/dashboard" class="block text-white">Admin Dashboard</a>
                @else
                    <a href="/dashboard" class="block text-white">Dashboard</a>
                @endif

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-red-400">Logout</button>
                </form>

            @endauth

        </div>


    </nav>


    <!-- DESKTOP NAVBAR -->
    <nav
        class="hidden md:flex justify-between items-center px-8 py-4 backdrop-blur-md bg-white/5 border-b border-white/10 sticky top-0 z-50">

        <div class="flex items-center gap-2">
            <i class="fa-solid fa-fire text-orange-500"></i>

            <h1 class="text-2xl font-bold bg-linear-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                SlangDict
            </h1>
        </div>

        <div class="space-x-6 flex items-center">

            <a href="/" class="hover:text-cyan-400">Home</a>
            <a href="/explore" class="hover:text-cyan-400">Explore</a>
            <a href="/about" class="hover:text-cyan-400">About</a>
            <a href="/addslang" class="hover:text-cyan-400">Add Slang</a>

            @guest

                <a href="/login" class="px-4 py-2 rounded hover:bg-white/10">
                    Login
                </a>

                <a href="/register" class="bg-cyan-500 px-4 py-2 rounded-lg hover:bg-cyan-600 shadow-lg shadow-cyan-500/30">
                    Register
                </a>

            @endguest


            @auth

                @if (Auth::user()->role == 'admin')
                    <a href="/admin/dashboard" class="px-4 py-2 rounded bg-purple-500 hover:bg-purple-600">
                        Admin Dashboard
                    </a>
                @else
                    <a href="/dashboard" class="px-4 py-2 rounded bg-cyan-500 hover:bg-cyan-600">
                        Dashboard
                    </a>
                @endif


                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="px-4 py-2 bg-red-500 rounded hover:bg-red-600">
                        Logout
                    </button>
                </form>

            @endauth

        </div>

    </nav>




    <!-- PAGE CONTENT -->
    @yield('content')



</body>

</html>
