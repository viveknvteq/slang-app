@extends('layout.app')

@section('title', 'Reset Password')

@section('content')

    <div class="bg-black flex items-center justify-center h-screen">

        <div class="bg-gray-900 p-8 rounded-2xl shadow-lg w-96">

            <h2 class="text-3xl font-bold text-white text-center mb-6">
                Reset Password
            </h2>

            @error('email')
                <div class="bg-red-500/20 text-red-400 p-3 rounded mb-4 text-sm text-center">
                    {{ $message }}
                </div>
            @enderror

            <form method="POST" action="{{ route('password.update') }}" class="space-y-4">

                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div>
                    <label class="text-gray-400 text-sm">Email</label>
                    <input type="email" name="email" placeholder="Enter your email"
                        value="{{ old('email') }}"
                        class="w-full mt-1 p-3 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>

                <div>
                    <label class="text-gray-400 text-sm">New Password</label>
                    <input type="password" name="password" placeholder="Enter new password"
                        class="w-full mt-1 p-3 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>

                <div>
                    <label class="text-gray-400 text-sm">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm new password"
                        class="w-full mt-1 p-3 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-cyan-500 hover:bg-cyan-400 text-black font-semibold py-3 rounded-lg transition duration-300">
                    Reset Password
                </button>

            </form>

        </div>

    </div>

@endsection
