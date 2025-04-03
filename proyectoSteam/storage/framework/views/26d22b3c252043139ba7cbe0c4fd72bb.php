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
        <h1 class="text-white text-4xl p-6 pl-10"><?php echo e($juego->nombre); ?></h1>
        <div class="flex flex-wrap">
            <div class="flex text-white relative
            h-50 w-full border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                <div class="bg-[url('<?php echo e(asset('img/gamePlaceholder.jpg')); ?>')] bg-left bg-no-repeat bg-cover relative h-full w-2/6">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                    </div>
                </div>
                <div class="flex flex-col items-end justify-between bg-slate-800 h-full w-4/6 p-5 text-right">
                    <h1 class="text-2xl"><?php echo e($juego->precio); ?> €</h1>
                    <div class="flex justify-end gap-2">
                        <div>
                            <?php $__currentLoopData = $juego->idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idioma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-2 py-1 bg-green-900 text-white rounded inline-block mb-1.5"><?php echo e($idioma->nombre); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div>
                            <?php $__currentLoopData = $juego->plataformas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plataforma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-2 py-1 bg-red-900 text-white rounded inline-block mb-1.5"><?php echo e($plataforma->nombre); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div>
                            <?php $__currentLoopData = $juego->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-2 py-1 bg-blue-900 text-white rounded inline-block mb-1.5"><?php echo e($tag->nombre); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php if(Auth::user() != null): ?>
                        <?php if(Auth::user()->carrito->juegos->contains('id', $juego->id)): ?>
                            <div class="text-slate-300">¡En el carrito!</div>
                        <?php elseif(Auth::user()->juegos->contains('id', $juego->id)): ?>
                            <div class="text-slate-300">¡Ya Comprado!</div>
                        <?php else: ?>
                            <div class="flex items-center justify-center bg-black h-11 w-35">
                                <form action="/juego/carrito" method="POST" class="inline">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="juego_id" value="<?php echo e($juego->id); ?>">
                                    <button type="submit" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</button>
                                </form>                                
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="flex items-center justify-center bg-black h-11 w-35">
                            <a href="/login" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</a>
                        </div>
                    <?php endif; ?>
                    
                    <h1 class="text-slate-400">Edad Req. <?php echo e($juego->clasificacion_edad); ?></h1>
                </div>
            </div>
            
            <?php $__currentLoopData = $juego->dlcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dlc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex text-white relative mt-0
                h-20 w-full border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                    <div class="bg-[url('<?php echo e(asset('img/gamePlaceholder.jpg')); ?>')] bg-left bg-no-repeat bg-cover relative h-full w-1/6">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                        </div>
                    </div>
                    <div class="flex justify-between bg-slate-800 h-full w-5/6 p-5">
                        <div class="text-2xl">
                            <span><?php echo e($dlc->nombre); ?></span>
                            <span class="text-slate-500 text-sm">DLC</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <?php if(Auth::user() != null): ?>
                                <?php if(Auth::user()->carrito->dlcs->contains('id', $dlc->id)): ?>
                                    <div class="text-slate-300">¡En el carrito!</div>
                                <?php elseif(Auth::user()->dlcs->contains('id', $dlc->id)): ?>
                                    <div class="text-slate-300">¡Ya Comprado!</div>
                                <?php else: ?>
                                    <div class="flex items-center justify-center bg-black h-11 w-35">
                                        <form action="/dlc/carrito" method="POST" class="inline">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="dlc_id" value="<?php echo e($dlc->id); ?>">
                                            <button type="submit" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</button>
                                        </form>                                        
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="flex items-center justify-center bg-black h-11 w-35">
                                    <a href="/login" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</a>
                                </div>
                            <?php endif; ?>
                            <div class="text-xl"><?php echo e($dlc->precio); ?> €</div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <h1 class="text-white text-3xl p-2 pl-10 w-full">Reseñas</h1>
            <div class="flex flex-wrap">
                <?php $__currentLoopData = $juego->resenyas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resenya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col relative p-5 text-slate-400 gap-2
                    h-40 w-131 border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                        <div class="h-1/3 flex items-center gap-2 justify-between">
                            <div class="flex items-center gap-2">
                                <img src="<?php echo e(asset('img/UserIcon.png')); ?>" alt="UserImg" class="w-10 h-10 rounded-full border-1 border-black">
                                <span><?php echo e($resenya->usuario->name); ?></span>
                            </div>
                            <div>
                                <?php if($resenya->positivo == true): ?>
                                    <img src="<?php echo e(asset('img/positivo.png')); ?>" alt="positivo" class="bg-contain border-2 border-slate-900">
                                <?php elseif($resenya->positivo == false): ?>
                                    <img src="<?php echo e(asset('img/negativo.png')); ?>" alt="negativo" class="bg-contain border-2 border-slate-900">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="h-2/3"><?php echo e($resenya->comentario); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($juego->resenyas->isEmpty()): ?>
                    <div class="pl-30 p-5 text-slate-600 text-xl">¡No hay reseñas aun!</div>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\proyectoSteam\resources\views/panelJuego.blade.php ENDPATH**/ ?>