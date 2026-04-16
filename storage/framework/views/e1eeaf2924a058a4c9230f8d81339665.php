<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>

    <section class="max-w-6xl mx-auto px-6 py-20">

        <!-- Hero -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-5xl font-extrabold text-gray-800 dark:text-white">
                About <span class="text-indigo-600">SlangDict</span>
            </h1>
            <p class="mt-4 text-gray-500 text-lg max-w-2xl mx-auto">
                Explore the evolving language of digital and campus culture.
            </p>
        </div>

        <!-- Content Card -->
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-10 space-y-6" data-aos="zoom-in">

            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                <strong>SlangDict</strong> is a modern, community-driven platform designed to capture,
                explore, and document the evolving language of today’s digital world.
            </p>

            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                Users can discover trending slang, understand meanings, and contribute new terms with real-world examples.
            </p>

        </div>

        <!-- Features -->
        <div class="grid md:grid-cols-3 gap-8 mt-16">

            <div class="p-6 bg-indigo-50 dark:bg-gray-800 rounded-xl shadow-lg hover:scale-105 transition duration-300"
                data-aos="fade-right">
                <h3 class="font-semibold text-indigo-600 mb-2">Accurate Content</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Structured and meaningful slang definitions.
                </p>
            </div>

            <div class="p-6 bg-indigo-50 dark:bg-gray-800 rounded-xl shadow-lg hover:scale-105 transition duration-300"
                data-aos="fade-up">
                <h3 class="font-semibold text-indigo-600 mb-2">Community Driven</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Powered by user contributions.
                </p>
            </div>

            <div class="p-6 bg-indigo-50 dark:bg-gray-800 rounded-xl shadow-lg hover:scale-105 transition duration-300"
                data-aos="fade-left">
                <h3 class="font-semibold text-indigo-600 mb-2">Contextual Learning</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Learn slang with real examples.
                </p>
            </div>

        </div>

        <!-- Vision & Mission -->
        <div class="grid md:grid-cols-2 gap-10 mt-20">

            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-8 rounded-2xl shadow-lg"
                data-aos="flip-left">
                <h2 class="text-2xl font-bold mb-4">Our Vision</h2>
                <p class="text-sm leading-relaxed">
                    To become a trusted repository of modern slang across digital and academic spaces.
                </p>
            </div>

            <div class="bg-gradient-to-r from-pink-500 to-red-500 text-white p-8 rounded-2xl shadow-lg"
                data-aos="flip-right">
                <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
                <p class="text-sm leading-relaxed">
                    Empower users to share and learn slang in a structured way.
                </p>
            </div>

        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\MCA2025\project\slang-app\resources\views/about.blade.php ENDPATH**/ ?>