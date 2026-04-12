@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('content')
    <style>
        .pagination svg {
            width: 16px;
            height: 16px;
        }

        .pagination span,
        .pagination a {
            background: rgba(255, 255, 255, 0.05) !important;
            color: #67e8f9 !important;
            /* cyan */
            border-radius: 6px !important;
            padding: 6px 10px !important;
            margin: 0 4px !important;
        }

        .pagination span[aria-current] {
            background: #06b6d4 !important;
            /* cyan active */
            color: #000 !important;
            font-weight: bold;
        }

        .pagination span[aria-disabled="true"] {
            opacity: 0.4 !important;
        }
    </style>

    <div class="max-w-7xl mx-auto p-8">

        <!-- PAGE HEADER -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-cyan-400">
                Admin Dashboard
            </h1>

            <span class="text-gray-400">
                Welcome {{ auth()->user()->name }}
            </span>
        </div>


        <!-- STATS -->
        <div class="grid md:grid-cols-3 gap-6 mb-10">

            <div class="bg-white/5 p-6 rounded-xl text-center">
                <p class="text-gray-400 text-sm">Total Slangs</p>
                <p class="text-3xl font-bold mt-2">{{ $totalSlangs }}</p>
            </div>

            <div class="bg-white/5 p-6 rounded-xl text-center">
                <p class="text-gray-400 text-sm">Total Users</p>
                <p class="text-3xl font-bold mt-2">{{ $totalUsers }}</p>
            </div>

            <div class="bg-white/5 p-6 rounded-xl text-center">
                <p class="text-gray-400 text-sm">Pending Approval</p>
                <p class="text-3xl font-bold mt-2 text-yellow-400">
                    {{ $pendingSlangs }}
                </p>
            </div>

        </div>


        <!-- PENDING SLANG MANAGEMENT -->
        <div class="bg-white/5 rounded-xl p-6">

            <h2 class="text-xl font-semibold mb-6">
                Pending Slang Approvals
            </h2>

             <!-- PAGINATION -->
                <div class="mt-6 flex justify-end pagination">
                    {{ $slangs->links() }}
                </div>

            <div class="overflow-x-auto">

                <table class="w-full text-left">

                    <thead class="text-gray-400 border-b border-white/10">
                        <tr>
                            <th class="py-3">Word</th>
                            <th>Meaning</th>
                            <th>Example</th>
                            <th>Submitted By</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($slangs as $slang)
                            <tr class="border-b border-white/10 align-top">

                                <!-- Word -->
                                <td class="py-4 font-semibold">
                                    {{ $slang->word }}
                                </td>

                                <!-- Meaning -->
                                <td class="text-gray-300 max-w-xs break-words">
                                    {{ $slang->meaning }}
                                </td>

                                <!-- Example (AUTO WRAP + LIMIT LOOK) -->
                                <td class="text-gray-400 max-w-sm break-words">
                                    <p class="line-clamp-3">
                                        {{ $slang->example }}
                                    </p>
                                </td>

                                <!-- User -->
                                <td class="text-gray-400">
                                    {{ $slang->user->name ?? 'Anonymous' }}
                                </td>

                                <!-- Actions -->
                                <td class="text-right">

                                    <div class="flex justify-end gap-2">

                                        <form action="{{ route('slang.approve', $slang->id) }}" method="POST">
                                            @csrf
                                            <button class="bg-green-500 px-3 py-1 rounded hover:bg-green-600 text-sm">
                                                Approve
                                            </button>
                                        </form>

                                        <form action="{{ route('slang.destroy', $slang->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="bg-red-500 px-3 py-1 rounded hover:bg-red-600 text-sm">
                                                Delete
                                            </button>
                                        </form>

                                    </div>

                                </td>

                            </tr>
                        @empty

                            <tr>
                                <td colspan="5" class="text-center py-6 text-gray-400">
                                    No pending slang submissions
                                </td>
                            </tr>
                        @endforelse

                    </tbody>


                </table>



            </div>

        </div>

    </div>

@endsection
