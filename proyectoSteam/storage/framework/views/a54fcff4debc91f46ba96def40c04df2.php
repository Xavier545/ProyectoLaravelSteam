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
        <div class="flex text-white">
            <?php if (isset($component)) { $__componentOriginalfe45d35374b1386408dd6fafc7d8df4c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe45d35374b1386408dd6fafc7d8df4c = $attributes; } ?>
<?php $component = App\View\Components\SidebarAdmin::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarAdmin::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe45d35374b1386408dd6fafc7d8df4c)): ?>
<?php $attributes = $__attributesOriginalfe45d35374b1386408dd6fafc7d8df4c; ?>
<?php unset($__attributesOriginalfe45d35374b1386408dd6fafc7d8df4c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe45d35374b1386408dd6fafc7d8df4c)): ?>
<?php $component = $__componentOriginalfe45d35374b1386408dd6fafc7d8df4c; ?>
<?php unset($__componentOriginalfe45d35374b1386408dd6fafc7d8df4c); ?>
<?php endif; ?>
            <?php echo $__env->yieldContent('gestion'); ?>
        </div>
    </body>
</html><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\resources\views/admin.blade.php ENDPATH**/ ?>