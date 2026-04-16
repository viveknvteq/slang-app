<?php $__env->startSection('title', 'Edit Slang'); ?>

<?php $__env->startSection('content'); ?>

    <div class="max-w-xl mx-auto mt-20">

        <h1 class="text-3xl mb-6">Edit Slang</h1>

        <form action="<?php echo e(route('slang.update', $slang->id)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <input type="text" name="word" value="<?php echo e($slang->word); ?>" class="w-full p-3 mb-4 bg-gray-800 rounded">

            <textarea name="meaning" class="w-full p-3 mb-4 bg-gray-800 rounded"><?php echo e($slang->meaning); ?></textarea>

            <textarea name="example" class="w-full p-3 mb-4 bg-gray-800 rounded"><?php echo e($slang->example); ?></textarea>

            <button class="bg-cyan-500 px-6 py-2 rounded">
                Update Slang
            </button>

        </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\MCA2025\project\slang-app\resources\views/editslang.blade.php ENDPATH**/ ?>