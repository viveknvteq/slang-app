{{-- resources/views/register.blade.php --}}

@extends('layout.app')

@section('title', 'Register')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-900 text-white">

```
<div class="bg-white/5 p-8 rounded-2xl w-96 border border-white/10 shadow-xl">

    <h2 class="text-2xl font-bold text-center mb-6 text-cyan-400">
        Create Account
    </h2>

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="bg-red-500/20 text-red-400 p-3 rounded mb-4 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">

        @csrf

        {{-- Name --}}
        <input
            type="text"
            name="name"
            placeholder="Full Name"
            value="{{ old('name') }}"
            class="w-full mb-4 p-3 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-cyan-500"
            required
        >

        {{-- Email --}}
        <input
            type="email"
            name="email"
            placeholder="Email Address"
            value="{{ old('email') }}"
            class="w-full mb-4 p-3 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-cyan-500"
            required
        >

        {{-- Password --}}
        <input
            type="password"
            name="password"
            placeholder="Password"
            class="w-full mb-4 p-3 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-cyan-500"
            required
        >

        {{-- Confirm Password --}}
        <input
            type="password"
            name="password_confirmation"
            placeholder="Confirm Password"
            class="w-full mb-6 p-3 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-cyan-500"
            required
        >

        {{-- Submit --}}
        <button
            type="submit"
            class="w-full bg-cyan-500 py-3 rounded-lg hover:bg-cyan-600 transition font-semibold"
        >
            Register
        </button>

    </form>

    <p class="text-center mt-5 text-gray-400 text-sm">
        Already have an account?
        <a href="/login" class="text-cyan-400 hover:underline">
            Login
        </a>
    </p>

    <a href="/"
       class="block text-center mt-4 text-gray-500 hover:text-gray-300 text-sm">
        ← Back to Home
    </a>

</div>
```

</div>

@endsection
