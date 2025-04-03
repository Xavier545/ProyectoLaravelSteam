<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        
    </head>
    <body class="bg-[#0e1626] h-screen">
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
        <div class="flex justify-center">
            <div class="flex text-white m-5">
                <table class="w-150 border-2 border-gray-800">
                    <thead>
                        <tr class="bg-[#2f3238] text-left text-white border-b border-gray-700">
                            <th class="p-2">Nombre</th>
                            <th class="p-2">Precio</th>
                            <th class="p-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $allInCartGames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $juego): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="bg-white/5 text-left text-white border-b border-gray-700">
                                <td class="p-2"><?php echo e($juego->nombre); ?></td>
                                <td class="p-2"><?php echo e($juego->precio); ?> €</td>
                                <td class="p-2">
                                    <form action="/juego/carrito/<?php echo e($juego->pivot->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="submit" value="Quitar" class="h-8 w-20 bg-red-800 text-white rounded
                                        transition-all duration-100 hover:bg-red-900 hover:scale-95 active:scale-90 cursor-pointer">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $allInCartDlcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dlc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="bg-white/5 text-left text-white border-b border-gray-700">
                                <td class="p-2"><?php echo e($dlc->nombre); ?> <span class="text-slate-500 text-sm">DLC</span></td>
                                <td class="p-2"><?php echo e($dlc->precio); ?> €</td>
                                <td class="p-2">
                                    <form action="/dlc/carrito/<?php echo e($dlc->pivot->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="submit" value="Quitar" class="h-8 w-20 bg-red-800 text-white rounded
                                        transition-all duration-100 hover:bg-red-900 hover:scale-95 active:scale-90 cursor-pointer">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($allInCartDlcs->isEmpty() && $allInCartGames->isEmpty()): ?>
                            <tr class="bg-white/5 text-left text-white border-b border-gray-700">
                                <td colspan="3" class="p-5 text-slate-500 text-sm">Aun no has puesto nada en el carrito...</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="flex text-white relative items-center justify-center
                h-20 w-82 border-4 m-6 border-slate-700 rounded-xl bg-white/4">
                <span class="text-slate-500 text-xl mr-3">Precio Total: <?php echo e($totalPrecio); ?>€</span>
                <div class="flex items-center justify-center bg-black h-9 w-21 mr-3">
                    <a href="/comprar" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Comprar</a>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\resources\views/carrito.blade.php ENDPATH**/ ?>