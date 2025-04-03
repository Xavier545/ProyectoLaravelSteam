<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body class="bg-[#0e1626]">
        <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
        <h1 class="text-white text-4xl p-10">Tienda</h1>
        <div class="flex flex-wrap">
            <?php $__currentLoopData = $allAccountGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/tienda/<?php echo e($juego->id); ?>" class="transition-transform duration-100 hover:scale-102 active:scale-98">
                    <div class="flex text-white relative
                    h-40 w-131 border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                        <div class="bg-[url('<?php echo e(asset('img/gamePlaceholder.jpg')); ?>')] bg-left bg-no-repeat bg-cover relative h-full w-2/6">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                                <h1  class="p-5 pr-0 text-2xl text-right absolute left-10
                                [text-shadow:2px_2px_0_black,-2px_2px_0_black,2px_-2px_0_black,-2px_-2px_0_black]"><?php echo e($juego->nombre); ?></h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between bg-slate-800 h-full w-4/6 p-5 text-right">
                            <h1 class="text-2xl"><?php echo e($juego->precio); ?> €</h1>
                            <h1 class="text-slate-400">Edad Req. <?php echo e($juego->clasificacion_edad); ?></h1>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
</html><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\resources\views/tienda.blade.php ENDPATH**/ ?>