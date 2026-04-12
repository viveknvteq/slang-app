@extends('layout.app')

@section('title', 'Add Slang')

@section('content')

    <div class="flex justify-center items-center h-screen">

        <div class="bg-white/5 p-10 rounded-xl w-96">

            <h1 class="text-2xl font-bold mb-6 text-center">Add Slang</h1>

            <form method="POST" action="/addslang">

                @csrf

                <!-- Word -->
                <input type="text" name="word" class="w-full p-3 mb-4 bg-gray-900 rounded" placeholder="Slang word"
                    required>

                <!-- Meaning -->
                <textarea name="meaning" class="w-full p-3 mb-4 bg-gray-900 rounded" placeholder="Meaning" required></textarea>

                <!-- Example (NEW FIELD) -->
                <textarea name="example" class="w-full p-3 mb-4 bg-gray-900 rounded" placeholder="Example sentence" required></textarea>

                <!-- Submit -->
                <button type="submit" class="w-full bg-cyan-500 p-3 rounded hover:bg-cyan-600">
                    Submit Slang
                </button>

            </form>

        </div>

    </div>

@endsection
