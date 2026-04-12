@extends('layout.app')

@section('title', 'Edit Slang')

@section('content')

    <div class="max-w-xl mx-auto mt-20">

        <h1 class="text-3xl mb-6">Edit Slang</h1>

        <form action="{{ route('slang.update', $slang->id) }}" method="POST">

            @csrf
            @method('PUT')

            <input type="text" name="word" value="{{ $slang->word }}" class="w-full p-3 mb-4 bg-gray-800 rounded">

            <textarea name="meaning" class="w-full p-3 mb-4 bg-gray-800 rounded">{{ $slang->meaning }}</textarea>

            {{-- <textarea name="example" class="w-full p-3 mb-4 bg-gray-800 rounded">{{ $slang->example }}</textarea> --}}

            <button class="bg-cyan-500 px-6 py-2 rounded">
                Update Slang
            </button>

        </form>

    </div>

@endsection
