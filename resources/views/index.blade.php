@extends('layout.app')

@section('title', 'SlangDict')

@section('content')

    <!-- Background Glow -->

    <div class="fixed top-0 left-0 w-96 h-96 bg-cyan-500 opacity-20 blur-3xl"></div>
    <div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600 opacity-20 blur-3xl"></div>






    <!-- HERO -->

    <section class="flex flex-col items-center text-center mt-28 px-6 animate-fade">

        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">

            <span class="bg-linear-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
                College Slang
            </span>

        </h1>

        <p class="text-gray-400 max-w-xl mb-10 text-lg">
            Search, explore and contribute trending slang words used in college and internet culture.
        </p>
        <!-- SEARCH BAR -->

        <form action="{{ route('slangs.search') }}" method="GET" class="w-full max-w-xl">

            <div class="w-full max-w-xl relative">

                <input id="searchInput" type="text" name="search" placeholder="Search slang..."
                    class="w-full pl-12 pr-24 py-4 rounded-xl bg-white/5 border border-white/10
                    focus:outline-none focus:border-cyan-400 text-white placeholder-gray-400">
                <i class="fa-solid fa-search absolute left-4 top-4 text-gray-400"></i>

                <div id="results" class="bg-gray-900 mt-2 rounded-lg overflow-hidden"></div>

                <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 rounded-lg hover:bg-cyan-600">
                </button>

            </div>

        </form>

    </section>



    <!-- TRENDING -->

    <section class="mt-24 px-8">

        <h2 class="text-3xl font-bold text-center mb-12">
            🔥 Trending Slang
        </h2>


        <div class="grid md:grid-cols-4 gap-6">

            @if (isset($slangs) && $slangs->count())
                @foreach ($slangs as $slang)
                    <div
                        class="bg-white/5 p-6 rounded-xl text-center
                                    border border-white/10
                                    transition-all duration-300
                                    hover:border-cyan-400
                                    hover:bg-cyan-500/20
                                    hover:scale-105
                                    hover:shadow-[0_0_30px_rgba(34,211,238,0.6)]
                                    relative hover:z-50">

                        <h3 class="text-xl font-bold">
                            {{ $slang->word }}
                        </h3>

                        <p class="text-gray-400 mt-2 text-sm">
                            {{ $slang->meaning }}
                        </p>

                    </div>
                @endforeach
            @else
                <p class="text-center text-gray-400 col-span-4">No slang found</p>
            @endif

        </div>

    </section>
    <section class="mt-32 px-8">

        <!-- SECTION TITLE -->

        <h2 class="text-4xl font-bold text-center mb-16">

            <span class="bg-linear-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
                ⚡ Powerful Features
            </span>

        </h2>


        <!-- FEATURE CARDS -->

        <div class="grid md:grid-cols-3 gap-10">


            <!-- SMART SEARCH -->

            <div
                class="bg-white/5 backdrop-blur-lg p-10 rounded-2xl border border-white/10
transition-all duration-300
hover:scale-105
hover:border-cyan-400
hover:shadow-[0_0_40px_rgba(34,211,238,0.4)]">

                <i class="fa-solid fa-magnifying-glass text-cyan-400 text-3xl mb-6"></i>

                <h3 class="text-2xl font-semibold mb-3">
                    Smart Search
                </h3>

                <p class="text-gray-400">
                    Find slang instantly with lightning-fast live search.
                </p>

            </div>



            <!-- ADD SLANG -->

            <div
                class="bg-white/5 backdrop-blur-lg p-10 rounded-2xl border border-white/10
transition-all duration-300
hover:scale-105
hover:border-green-400
hover:shadow-[0_0_40px_rgba(34,197,94,0.4)]">

                <i class="fa-solid fa-plus text-green-400 text-3xl mb-6"></i>

                <h3 class="text-2xl font-semibold mb-3">
                    Add Slang
                </h3>

                <p class="text-gray-400">
                    Contribute new slang words and grow the community dictionary.
                </p>

            </div>



            <!-- ADMIN CONTROL -->

            <div
                class="bg-white/5 backdrop-blur-lg p-10 rounded-2xl border border-white/10
                      transition-all duration-300
                      hover:scale-105
                      hover:border-purple-400
                      hover:shadow-[0_0_40px_rgba(168,85,247,0.4)]">

                <i class="fa-solid fa-shield text-purple-400 text-3xl mb-6"></i>

                <h3 class="text-2xl font-semibold mb-3">
                    Admin Control
                </h3>

                <p class="text-gray-400">
                    Admins review, approve and manage slang content easily.
                </p>

            </div>


        </div>

    </section>
    <!-- TOAST -->

    <div id="toast" class="fixed top-5 right-5 bg-cyan-500 px-6 py-3 rounded-lg hidden shadow-lg">
        Success
    </div>


    <footer class="mt-28 text-center text-gray-500 pb-10">

        <p>© 2026 SlangDict</p>

        <div class="flex justify-center gap-6 mt-4 text-lg">

            <i class="fa-brands fa-github hover:text-white"></i>
            <i class="fa-brands fa-instagram hover:text-white"></i>
            <i class="fa-brands fa-twitter hover:text-white"></i>

        </div>

    </footer>

@endsection
