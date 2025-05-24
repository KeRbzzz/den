<?php $__env->startSection('content'); ?>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Welcome, <?php echo e(auth()->user()->name); ?></h1>

        <?php if(session('status')): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded shadow">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <?php if (isset($component)) { $__componentOriginalb63f174754b9376d0cbcfda0c77a69e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card','data' => ['title' => 'Posts','count' => $postCount]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Posts','count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postCount)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2)): ?>
<?php $attributes = $__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2; ?>
<?php unset($__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb63f174754b9376d0cbcfda0c77a69e2)): ?>
<?php $component = $__componentOriginalb63f174754b9376d0cbcfda0c77a69e2; ?>
<?php unset($__componentOriginalb63f174754b9376d0cbcfda0c77a69e2); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb63f174754b9376d0cbcfda0c77a69e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card','data' => ['title' => 'Orders','count' => $orderCount]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Orders','count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orderCount)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2)): ?>
<?php $attributes = $__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2; ?>
<?php unset($__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb63f174754b9376d0cbcfda0c77a69e2)): ?>
<?php $component = $__componentOriginalb63f174754b9376d0cbcfda0c77a69e2; ?>
<?php unset($__componentOriginalb63f174754b9376d0cbcfda0c77a69e2); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb63f174754b9376d0cbcfda0c77a69e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.card','data' => ['title' => 'Users','count' => $userCount]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Users','count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($userCount)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2)): ?>
<?php $attributes = $__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2; ?>
<?php unset($__attributesOriginalb63f174754b9376d0cbcfda0c77a69e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb63f174754b9376d0cbcfda0c77a69e2)): ?>
<?php $component = $__componentOriginalb63f174754b9376d0cbcfda0c77a69e2; ?>
<?php unset($__componentOriginalb63f174754b9376d0cbcfda0c77a69e2); ?>
<?php endif; ?>
        </div>

        
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Quick Actions</h2>
            <div class="flex gap-4 mb-4">
                <button onclick="toggleForm('postForm')" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                    Create Post
                </button>
                <button onclick="toggleForm('orderForm')" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow">
                    Create Order
                </button>
            </div>

            
            <div id="postForm" class="hidden bg-white p-6 rounded shadow">
                <form action="<?php echo e(route('posts.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['name' => 'title','label' => 'Title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'title','label' => 'Title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $attributes = $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $component = $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalcd97a59301ba78d56b3ed60dd41409ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.textarea','data' => ['name' => 'content','label' => 'Content']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'content','label' => 'Content']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab)): ?>
<?php $attributes = $__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab; ?>
<?php unset($__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd97a59301ba78d56b3ed60dd41409ab)): ?>
<?php $component = $__componentOriginalcd97a59301ba78d56b3ed60dd41409ab; ?>
<?php unset($__componentOriginalcd97a59301ba78d56b3ed60dd41409ab); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => ['label' => 'Submit Post','color' => 'blue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Submit Post','color' => 'blue']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                </form>
            </div>

            
            <div id="orderForm" class="hidden bg-white p-6 rounded shadow">
                <form action="<?php echo e(route('orders.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['name' => 'product_name','label' => 'Product Name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'product_name','label' => 'Product Name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $attributes = $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $component = $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['type' => 'number','name' => 'quantity','label' => 'Quantity']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','name' => 'quantity','label' => 'Quantity']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $attributes = $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $component = $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['type' => 'number','step' => '0.01','name' => 'total','label' => 'Total Amount ($)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','step' => '0.01','name' => 'total','label' => 'Total Amount ($)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $attributes = $__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__attributesOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b)): ?>
<?php $component = $__componentOriginal5c2a97ab476b69c1189ee85d1a95204b; ?>
<?php unset($__componentOriginal5c2a97ab476b69c1189ee85d1a95204b); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['name' => 'status','label' => 'Status','options' => ['pending', 'processing', 'completed', 'cancelled']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'status','label' => 'Status','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['pending', 'processing', 'completed', 'cancelled'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal05c60cf16ed354df0cc07a0780e550ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.submit','data' => ['label' => 'Submit Order','color' => 'green']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Submit Order','color' => 'green']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $attributes = $__attributesOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__attributesOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad)): ?>
<?php $component = $__componentOriginal05c60cf16ed354df0cc07a0780e550ad; ?>
<?php unset($__componentOriginal05c60cf16ed354df0cc07a0780e550ad); ?>
<?php endif; ?>
                </form>
            </div>
        </div>

        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <?php if (isset($component)) { $__componentOriginal07496fbedc8f1b3855c71c7644ff96cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.section','data' => ['title' => 'Recent Posts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recent Posts']); ?>
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginal649da9baaa6d8f62c366b56c65bcebd3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal649da9baaa6d8f62c366b56c65bcebd3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.post','data' => ['post' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal649da9baaa6d8f62c366b56c65bcebd3)): ?>
<?php $attributes = $__attributesOriginal649da9baaa6d8f62c366b56c65bcebd3; ?>
<?php unset($__attributesOriginal649da9baaa6d8f62c366b56c65bcebd3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal649da9baaa6d8f62c366b56c65bcebd3)): ?>
<?php $component = $__componentOriginal649da9baaa6d8f62c366b56c65bcebd3; ?>
<?php unset($__componentOriginal649da9baaa6d8f62c366b56c65bcebd3); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-500">No posts yet.</p>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd)): ?>
<?php $attributes = $__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd; ?>
<?php unset($__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07496fbedc8f1b3855c71c7644ff96cd)): ?>
<?php $component = $__componentOriginal07496fbedc8f1b3855c71c7644ff96cd; ?>
<?php unset($__componentOriginal07496fbedc8f1b3855c71c7644ff96cd); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal07496fbedc8f1b3855c71c7644ff96cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.section','data' => ['title' => 'Recent Orders']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recent Orders']); ?>
                <?php if (isset($component)) { $__componentOriginal6cf80ca059e4a17bc2b26d31f7786a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cf80ca059e4a17bc2b26d31f7786a9d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.order-table','data' => ['orders' => $latestOrders]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.order-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['orders' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($latestOrders)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cf80ca059e4a17bc2b26d31f7786a9d)): ?>
<?php $attributes = $__attributesOriginal6cf80ca059e4a17bc2b26d31f7786a9d; ?>
<?php unset($__attributesOriginal6cf80ca059e4a17bc2b26d31f7786a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cf80ca059e4a17bc2b26d31f7786a9d)): ?>
<?php $component = $__componentOriginal6cf80ca059e4a17bc2b26d31f7786a9d; ?>
<?php unset($__componentOriginal6cf80ca059e4a17bc2b26d31f7786a9d); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd)): ?>
<?php $attributes = $__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd; ?>
<?php unset($__attributesOriginal07496fbedc8f1b3855c71c7644ff96cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07496fbedc8f1b3855c71c7644ff96cd)): ?>
<?php $component = $__componentOriginal07496fbedc8f1b3855c71c7644ff96cd; ?>
<?php unset($__componentOriginal07496fbedc8f1b3855c71c7644ff96cd); ?>
<?php endif; ?>
        </div>
    </div>

    <script>
        function toggleForm(formId) {
            const allForms = ['postForm', 'orderForm'];
            allForms.forEach(id => {
                const form = document.getElementById(id);
                form.classList.toggle('hidden', id !== formId ? true : !form.classList.contains('hidden'));
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\Website\resources\views/dashboard.blade.php ENDPATH**/ ?>