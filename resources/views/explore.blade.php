@extends('layout.app')

@section('title', 'Explore Slang')

@section('content')

    {{-- <nav class="flex justify-between items-center px-8 py-4 bg-white/5 border-b border-white/10">
        <h1 class="text-2xl font-bold text-cyan-400">SlangDict</h1>

        <div class="space-x-6">
            <a href="/">Home</a>
            <a href="/explore" class="text-cyan-400">Explore</a>
            <a href="/about">About</a>
        </div>

    </nav> --}}

    <section class="px-10 mt-16">

        <h1 class="text-4xl font-bold mb-10">Explore Slang</h1>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach ($slangs as $slang)
                <div class="bg-white/5 p-6 rounded-xl">
                    <h2 class="text-xl font-bold">{{ $slang->word }}</h2>
                    <p class="text-gray-400 mt-2">{{ $slang->meaning }}</p>
                </div>
            @endforeach

        </div>

    </section>

@endsection
