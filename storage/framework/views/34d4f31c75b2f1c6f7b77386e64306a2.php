<?php $__env->startSection('title', 'Explore Slang'); ?>

<?php $__env->startSection('content'); ?>

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

        

        <!-- Slang Grid -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <?php $__currentLoopData = $slangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 group"
                    data-aos="zoom-in" data-word="<?php echo e(strtolower($slang->word)); ?>"
                    data-meaning="<?php echo e(strtolower($slang->meaning)); ?>" data-example="<?php echo e(strtolower($slang->example)); ?>">

                    <!-- Word -->
                    <h2 class="text-xl font-bold text-indigo-600 group-hover:text-indigo-500 transition">
                        <?php echo e($slang->word); ?>

                    </h2>

                    <!-- Meaning -->
                    <p class="text-gray-600 dark:text-gray-300 mt-3 text-sm leading-relaxed">
                        <?php echo e($slang->meaning); ?>

                    </p>

                    <!-- Example -->
                    <p class="text-xs text-gray-400 mt-4 italic">
                        "<?php echo e($slang->example); ?>"
                    </p>

                    <!-- Status Badge -->
                    

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </section>
    <script>
        const SEARCH_URL = "<?php echo e(route('slangs.search')); ?>";
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

            function filterCards(query) {
                const cards = document.querySelectorAll('[data-word]');
                const lowerQuery = query.trim().toLowerCase();

                if (!lowerQuery) {
                    cards.forEach(card => {
                        card.classList.remove('hidden');
                    });
                    return;
                }

                cards.forEach(card => {
                    const word = card.dataset.word || '';
                    const meaning = card.dataset.meaning || '';
                    const example = card.dataset.example || '';
                    const matches = word.includes(lowerQuery) || meaning.includes(lowerQuery) || example
                        .includes(lowerQuery);

                    card.classList.toggle('hidden', !matches);
                });
            }

            function highlight(query, text) {
                const regex = new RegExp(`(${query.replace(/[.*+?^${}()|[\]\]/g, '\\$&')})`, 'gi');
                return escapeHtml(text).replace(regex, '<span class="text-cyan-400 font-bold">$1</span>');
            }

            function doSearch(query) {
                query = query.trim();
                filterCards(query);

                if (query.length < 1) {
                    hide();
                    return;
                }


                // AJAX search request
                fetch(`${SEARCH_URL}?search=${encodeURIComponent(query)}`, {
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
                        onmousedown="input.value = '${escapeHtml(item.word)}'; hide();"
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\MCA2025\project\slang-app\resources\views/explore.blade.php ENDPATH**/ ?>