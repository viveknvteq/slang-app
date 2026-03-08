@extends('layout.app')

@section('title', 'User Dashboard')

@section('content')

    <div class="max-w-6xl mx-auto p-8">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-8">

            <h1 class="text-3xl font-bold text-cyan-400">
                User Dashboard
            </h1>

            <a href="/addslang" class="bg-cyan-500 px-4 py-2 rounded-lg hover:bg-cyan-600">
                + Add Slang
            </a>

        </div>


        <!-- USER STATS -->
        <div class="grid md:grid-cols-3 gap-6 mb-10">

            <div class="bg-white/5 p-6 rounded-xl text-center">
                <p class="text-gray-400 text-sm">My Submissions</p>
                <p class="text-3xl font-bold mt-2">
                    {{ $mySlangs }}
                </p>
            </div>

            <div class="bg-white/5 p-6 rounded-xl text-center">
                <p class="text-gray-400 text-sm">Approved</p>
                <p class="text-3xl font-bold text-green-400 mt-2">
                    {{ $approvedSlangs }}
                </p>
            </div>

            <div class="bg-white/5 p-6 rounded-xl text-center">
                <p class="text-gray-400 text-sm">Pending</p>
                <p class="text-3xl font-bold text-yellow-400 mt-2">
                    {{ $pendingSlangs }}
                </p>
            </div>

        </div>


        <!-- MY SLANGS -->
        <div class="bg-white/5 p-6 rounded-xl">

            <h2 class="text-xl font-semibold mb-6">
                My Slang Submissions
            </h2>

            <div class="space-y-4">

                @forelse($slangs as $slang)
                    <div class="flex justify-between items-center border-b border-white/10 pb-3">

                        <div>

                            <p class="font-semibold">
                                {{ $slang->word }}
                            </p>

                            <p class="text-gray-400 text-sm">
                                {{ $slang->meaning }}
                            </p>

                        </div>

                        <span
                            class="text-sm
                    {{ $slang->approved ? 'text-green-400' : 'text-yellow-400' }}">

                            {{ $slang->approved ? 'Approved' : 'Pending' }}

                        </span>

                    </div>

                @empty

                    <p class="text-gray-400">
                        You haven't submitted any slang yet.
                    </p>
                @endforelse

            </div>

        </div>

    </div>

@endsection
