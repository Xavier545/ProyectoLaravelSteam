<nav class="bg-[#182137] text-white p-4 flex justify-between items-center">
    <!-- Sección izquierda -->
    <div class="flex space-x-4">
        <a href="/tienda" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Tienda</a>
        @if (Auth::user() != null)
            <a href="/biblioteca" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Biblioteca</a>
        @endif
    </div>
        
    <!-- Sección derecha -->
    <div class="flex items-center space-x-3">
        <!-- Boton de Admin -->
        @if(Auth::check() && Auth::user()->isAdmin)
            <a href="/admin" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Admin Menu</a>
        @endif
        @if (Auth::user() == null)
            <a href="/register" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Registrarse</a>
            <a href="/login" class="transition-all duration-200 px-6 py-2 bg-gray-700 rounded-lg hover:bg-blue-900 text-gray-300 hover:text-white">Iniciar Sesion</a>
        @else
            {{-- CARRITO --}}
            <a href="/carrito"
            class="h-10 w-10 flex items-center justify-center bg-transparent rounded-lg hover:bg-white/10 active:bg-white/30 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2m0 0l1.6 8h10l1.6-8m-13.2 0h12.8M9 13h6m-6 4h6m-8 4a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z"/>
                </svg>
            </a>
            <!-- Boton Usuario -->
            <div class="flex items-center space-x-4 px-4 rounded-lg">
                <a class="hidden sm:inline hover:underline hover:text-blue-500 cursor-pointer" href="/profile">{{ Auth::user()->name }}</a>
                <img src="{{ asset('img/UserIcon.png') }}" alt="UserImg" class="w-10 h-10 rounded-full border-1 border-black">
            </div>
        @endif
    </div>
</nav>