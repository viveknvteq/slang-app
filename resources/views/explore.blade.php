@extends('layout.app')

@section('title', 'Explore Slang')

@section('content')

    <section class="max-w-7xl mx-auto px-6 py-16">

        <!-- Heading -->
        <div class="text-center mb-14" data-aos="fade-up">
            <h1 class="text-5xl font-extrabold text-gray-800 dark:text-white">
                Explore <span class="text-indigo-600">Slang</span>
            </h1>
            <p class="mt-4 text-gray-500 text-lg max-w-2xl mx-auto">
                Discover trending slang words from modern digital and campus culture.
            </p>
        </div>

        <div class="mb-10 flex justify-center" data-aos="fade-up">
            <div class="relative w-full max-w-xl">

                <i
                    class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none z-10"></i>

                <input id="searchInput" type="text" name="search" placeholder="Search slang..." autocomplete="off"
                    class="w-full pl-12 pr-4 py-4 rounded-xl bg-white/5 border border-white/10
                   text-white placeholder-gray-400 focus:outline-none focus:border-cyan-400
                   transition-all duration-200">

                <div id="searchResults"
                    class="absolute top-full left-0 w-full mt-2 bg-gray-900 border border-white/10
                   rounded-xl shadow-2xl z-[999] hidden overflow-hidden">
                </div>

            </div>
        </div>

        <!-- Slang Grid -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach ($slangs as $slang)
                <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 group"
                    data-aos="zoom-in">

                    <!-- Word -->
                    <h2 class="text-xl font-bold text-indigo-600 group-hover:text-indigo-500 transition">
                        {{ $slang->word }}
                    </h2>

                    <!-- Meaning -->
                    <p class="text-gray-600 dark:text-gray-300 mt-3 text-sm leading-relaxed">
                        {{ $slang->meaning }}
                    </p>

                    <!-- Example -->
                    <p class="text-xs text-gray-400 mt-4 italic">
                        "{{ $slang->example }}"
                    </p>

                    <!-- Status Badge -->
                    {{-- <div class="mt-4">
                    <span class="px-3 py-1 text-xs rounded-full
                        {{ $slang->status === 'active' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                        {{ ucfirst($slang->status) }}
                    </span>
                </div> --}}

                </div>
            @endforeach

        </div>

    </section>
    <script>
        const SEARCH_URL = "{{ route('slangs.search') }}";
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('searchInput');
            const results = document.getElementById('searchResults');
            let debounceTimer;
            let activeIndex = -1;

            function escapeHtml(str) {
                return String(str)
                    .replace(/&/g, '&amp;').replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;').replace(/"/g, '&quot;');
            }

            function hide() {
                results.classList.add('hidden');
                results.innerHTML = '';
                activeIndex = -1;
            }

            function highlight(query, text) {
                const regex = new RegExp(`(${query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')})`, 'gi');
                return escapeHtml(text).replace(regex, '<span class="text-cyan-400 font-bold">$1</span>');
            }

            function doSearch(query) {
                query = query.trim();
                if (query.length < 1) {
                    hide();
                    return;
                }


                // To match your actual route, e.g.:
                fetch(`{{ route('slangs.search') }}?search=${encodeURIComponent(query)}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => {
                        if (!res.ok) throw new Error(`HTTP ${res.status}`);
                        return res.json();
                    })
                    .then(data => {
                        if (!Array.isArray(data) || data.length === 0) {
                            results.innerHTML = `
                    <div class="px-5 py-4 text-sm text-gray-500 text-center">
                        No results for <span class="text-white font-medium">"${escapeHtml(query)}"</span>
                    </div>`;
                        } else {
                            results.innerHTML = data.map((item, i) => `
                    <div
                        data-index="${i}"
                        data-word="${escapeHtml(item.word)}"
                        data-slug="${escapeHtml(item.slug)}"
                        class="search-item flex flex-col px-5 py-3 cursor-pointer hover:bg-white/5
                               transition-colors border-b border-white/5 last:border-0"
                        onmousedown="window.location='/slangs/${escapeHtml(item.slug)}'"
                    >
                        <span class="text-sm text-white">${highlight(query, item.word)}</span>
                        <span class="text-xs text-gray-400 truncate mt-0.5">${escapeHtml(item.meaning)}</span>
                    </div>`).join('');
                        }
                        results.classList.remove('hidden');
                        activeIndex = -1;
                    })
                    .catch(err => {
                        results.innerHTML =
                            `<div class="px-5 py-4 text-sm text-red-400 text-center">Error: ${err.message}</div>`;
                        results.classList.remove('hidden');
                    });
            }

            input.addEventListener('keydown', function(e) {
                const items = results.querySelectorAll('.search-item');

                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    activeIndex = Math.min(activeIndex + 1, items.length - 1);
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    activeIndex = Math.max(activeIndex - 1, -1);
                } else if (e.key === 'Enter') {
                    e.preventDefault();
                    if (activeIndex >= 0 && items[activeIndex]) {
                        window.location = '/slangs/' + items[activeIndex].dataset.slug;
                    } else {
                        clearTimeout(debounceTimer);
                        doSearch(input.value);
                    }
                    return;
                } else if (e.key === 'Escape') {
                    hide();
                    return;
                }

                items.forEach((el, i) => {
                    el.classList.toggle('bg-white/10', i === activeIndex);
                });

                if (activeIndex >= 0 && items[activeIndex]) {
                    input.value = items[activeIndex].dataset.word;
                }
            });

            input.addEventListener('input', function() {
                activeIndex = -1;
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => doSearch(this.value), 250);
            });

            input.addEventListener('focus', function() {
                if (this.value.trim().length >= 1) doSearch(this.value);
            });

            document.addEventListener('click', e => {
                if (!input.closest('.relative').contains(e.target)) hide();
            });
        });
    </script>
@endsection
