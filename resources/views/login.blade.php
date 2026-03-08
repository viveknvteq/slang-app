@extends('layout.app')

@section('title', 'Login')

@section('content')

    <div class="bg-black flex items-center justify-center h-screen">

        <div class="bg-gray-900 p-8 rounded-2xl shadow-lg w-96">

            <h2 class="text-3xl font-bold text-white text-center mb-6">
                Login
            </h2>
            @if (session('error'))
                <div class="bg-red-500/20 text-red-400 p-3 rounded mb-4 text-sm text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="/login" class="space-y-4">

                @csrf

                <div>
                    <label class="text-gray-400 text-sm">Email</label>

                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full mt-1 p-3 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>

                <div>
                    <label class="text-gray-400 text-sm">Password</label>

                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full mt-1 p-3 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-cyan-500 hover:bg-cyan-400 text-black font-semibold py-3 rounded-lg transition duration-300">
                    Login
                </button>

            </form>

            <p class="text-gray-400 text-sm text-center mt-4">
                Don’t have an account?
                <a href="/register" class="text-cyan-400 hover:underline">
                    Sign Up
                </a>
            </p>

            <div class="text-center mt-4">
                <a href="/" class="text-gray-500 hover:text-white text-sm">
                    ← Back to Home
                </a>
            </div>

        </div>

    </div>

@endsection
