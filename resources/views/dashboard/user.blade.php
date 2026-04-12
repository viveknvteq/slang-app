@extends('layout.app')

@section('title', 'User Dashboard')

@section('content')

    <div class="max-w-6xl mx-auto p-8">
        <h2 class="text-xl text-gray-400">
            Welcome {{ Auth::user()->name }} 👋
        </h2>
        <!-- HEADER -->
        <div class="flex justify-between items-center mb-8">

            <h1 class="text-3xl font-bold text-cyan-400">
                User Dashboard
            </h1>

            <a href="/addslang" class="bg-cyan-500 px-4 py-2 rounded-lg hover:bg-cyan-600 transition">
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
                    <div class="flex justify-between items-center border-b border-white/10 pb-4">

                        <div>

                            <p class="font-semibold text-lg">
                                {{ $slang->word }}
                            </p>

                            <p class="text-gray-400 text-sm">
                                {{ $slang->meaning }}
                            </p>

                            <span
                                class="text-xs
                    {{ $slang->status == 'approved' ? 'text-green-400' : 'text-yellow-400' }}">

                                {{ ucfirst($slang->status) }}

                            </span>

                        </div>

                        <!-- ACTION BUTTONS -->
                        <div class="flex gap-3">



                                @if ($slang->status == 'pending')
                                    <!-- Edit -->
                                    <a href="{{ route('slang.edit', $slang->id) }}"
                                        class="bg-blue-500 px-3 py-1 rounded text-sm hover:bg-blue-600">
                                        Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('slang.destroy', $slang->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="bg-red-500 px-3 py-1 rounded text-sm hover:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                @else
                                    <span class="text-green-400 text-sm font-semibold">
                                        Approved ✔
                                    </span>
                                @endif


                        </div>

                    @empty

                        <p class="text-gray-400">
                            You haven't submitted any slang yet.
                        </p>
                @endforelse

            </div>

            <!-- PAGINATION -->
            <div class="mt-6">
                {{ $slangs->links() }}
            </div>

        </div>

    </div>

@endsection
