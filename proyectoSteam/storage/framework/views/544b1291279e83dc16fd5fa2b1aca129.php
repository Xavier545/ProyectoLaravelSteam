<nav class="bg-[#182137] text-white p-4 flex justify-between items-center">
    <!-- Sección izquierda -->
    <div class="flex space-x-4">
        <a href="#" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Tienda</a>
        <a href="#" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Biblioteca</a>
    </div>
        
    <!-- Sección derecha -->
    <div class="flex items-center space-x-3">
        <!-- Boton de Admin -->
        <a href="/admin" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Admin Menu</a>
        <!-- Boton Usuario -->
        <div class="flex items-center space-x-4 px-4 rounded-lg">
            <span class="hidden sm:inline hover:underline hover:text-blue-500 cursor-pointer">Usuario</span>
            <img src="<?php echo e(asset('img/UserIcon.png')); ?>" alt="UserImg" class="w-10 h-10 rounded-full border-1 border-black">
        </div>
    </div>
</nav><?php /**PATH C:\Users\Xavier\Desktop\DAW2n\M07\laravel\steam\resources\views\partials\navbar.blade.php ENDPATH**/ ?>