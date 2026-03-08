@extends('layout.app')
@php
use Illuminate\Support\Facades\Auth;
@endphp
@section('title','Profile')

@section('content')

<section class="flex justify-center mt-20">

<div class="bg-white/5 p-10 rounded-xl text-center w-96">

<img src="https://i.pravatar.cc/150"
class="w-24 h-24 rounded-full mx-auto mb-4">

<h2 class="text-xl font-bold">
{{ Auth::user()->name }}
</h2>

<p class="text-gray-400">
{{ Auth::user()->email }}
</p>

<button class="mt-6 bg-cyan-500 px-6 py-2 rounded hover:bg-cyan-600">
Edit Profile
</button>

</div>

</section>

@endsection
