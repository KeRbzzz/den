<?php $__env->startSection('content'); ?>
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Create New Post</h1>

            <form action="<?php echo e(route('posts.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Title</label>
                    <input type="text" name="title" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Content</label>
                    <textarea name="content" rows="4" class="w-full p-2 border rounded" required></textarea>
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit Post
                    </button>
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\Website\resources\views/posts/create.blade.php ENDPATH**/ ?>