<table class="min-w-full">
    <thead>
    <tr class="border-b">
        <th class="text-left py-2">Product</th>
        <th class="text-left py-2">Amount</th>
        <th class="text-left py-2">Status</th>
        <th class="text-left py-2">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="border-b hover:bg-gray-50">
            <td class="py-2"><?php echo e($order->product_name); ?></td>
            <td class="py-2">$<?php echo e(number_format($order->total, 2)); ?></td>
            <td class="py-2">
                    <span class="px-2 py-1 text-xs rounded-full
                        <?php echo e($order->status === 'completed' ? 'bg-green-200 text-green-800' : ''); ?>

                        <?php echo e($order->status === 'pending' ? 'bg-yellow-200 text-yellow-800' : ''); ?>

                        <?php echo e($order->status === 'cancelled' ? 'bg-red-200 text-red-800' : ''); ?>">
                        <?php echo e(ucfirst($order->status)); ?>

                    </span>
            </td>
            <td class="py-2">
                <div class="flex items-center space-x-2">
                    
                    <a href="<?php echo e(route('orders.edit', $order->id)); ?>"
                       class="text-blue-600 hover:text-blue-800 text-xs flex items-center"
                       title="Edit Order">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit
                    </a>

                    
                    <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"
                                class="text-red-600 hover:text-red-800 text-xs flex items-center"
                                onclick="return confirm('Are you sure you want to delete this order?')"
                                title="Delete Order">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="4" class="py-2 text-gray-500 text-center">No orders found.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<?php /**PATH C:\laravel\Website\resources\views/components/dashboard/order-table.blade.php ENDPATH**/ ?>