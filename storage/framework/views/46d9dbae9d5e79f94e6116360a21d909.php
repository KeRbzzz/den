<div class="mb-4">
    <label class="block text-gray-700 mb-2"><?php echo e($label); ?></label>
    <input type="<?php echo e($type ?? 'text'); ?>"
           name="<?php echo e($name); ?>"
           value="<?php echo e($value ?? old($name)); ?>"
           class="w-full p-2 border rounded"
           <?php echo e($attributes); ?>

           required>
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\laravel\Website\resources\views/components/form/input.blade.php ENDPATH**/ ?>