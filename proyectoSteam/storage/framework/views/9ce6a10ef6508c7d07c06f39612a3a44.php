<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
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
        <h1 class="text-white text-4xl p-10">Biblioteca</h1>
        <div class="flex flex-wrap">
            <?php $__currentLoopData = $allUserGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex text-white relative mt-0
                    h-20 w-full border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                    <div class="bg-[url('<?php echo e(asset('img/gamePlaceholder.jpg')); ?>')] bg-left bg-no-repeat bg-cover relative h-full w-1/6">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                            <h1  class="p-5 pr-0 text-2xl text-right absolute left-10
                                    [text-shadow:2px_2px_0_black,-2px_2px_0_black,2px_-2px_0_black,-2px_-2px_0_black]"><?php echo e($juego->nombre); ?></h1>
                        </div>
                    </div>
                    <div class="flex flex-col items-end justify-center bg-slate-800 h-full w-5/6">
                        <a href="/tienda/<?php echo e($juego->id); ?>" class="transition-all duration-200 p-1 mr-2 mt-2 w-40 text-center bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Pagina de la Tienda</a>
                        <h1 class="text-slate-400 text-right m-1 mr-2 mt-0">Edad Req: <?php echo e($juego->clasificacion_edad); ?></h1>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $allUserDlcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dlc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex text-white relative mt-0
                    h-20 w-full border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                    <div class="bg-[url('<?php echo e(asset('img/gamePlaceholder.jpg')); ?>')] bg-left bg-no-repeat bg-cover relative h-full w-1/6">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                            <h1  class="p-5 pr-0 text-xl text-right absolute left-10
                                    [text-shadow:2px_2px_0_black,-2px_2px_0_black,2px_-2px_0_black,-2px_-2px_0_black]"><?php echo e($dlc->nombre); ?></h1>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end bg-slate-800 h-full w-5/6 p-1">
                        <div class="flex justify-between">
                            <h1 class="text-slate-600">DLC</h1>
                        </div>
                        <h1 class="text-slate-400 text-right m-2"></h1>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
</html><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\proyectoSteam\resources\views/biblioteca.blade.php ENDPATH**/ ?>