<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-[#0e1626] h-screen">
        <x-navbar/>
        <div class="flex text-white">
            <div class="p-10 w-1/3 h-110 flex flex-col justify-center gap-8">
                <div class="flex relative items-center h-full w-full">
                    <div class="flex gap-5 items-center text-white relative
                    h-full w-full border-4 p-10 border-slate-700 rounded-xl bg-white/4">
                        <div class="flex flex-col gap-2 h-full w-40">
                            <h1 class="text-4xl">{{ Auth::user()->name }}</h1>
                            <h1 class="text-xl">{{ Auth::user()->email }}</h1>
                            <div class="flex gap-3">
                                <h1 class="text-xl">Rol: </h1>
                                @if (Auth::user()->isAdmin == false)
                                    <div class="px-2 py-1 bg-indigo-900 text-white rounded inline-block mb-1.5">Cliente</div>                                        
                                @elseif (Auth::user()->isAdmin == true)
                                    <div class="px-2 py-1 bg-amber-700 text-white rounded inline-block mb-1.5">Admin</div>
                                @endif
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="flex relative items-center h-full w-full">
                    <div class="flex gap-5 items-center text-white relative
                    h-full w-full border-4 p-6 pl-10 border-slate-700 rounded-xl bg-white/4">
                        <h1 class="text-xl">Idioma Preferido: </h1>
                        @if (Auth::user()->idioma == null)
                            <div class="px-2 py-1 bg-zinc-900 text-white rounded inline-block mb-1.5">No Asignado</div>
                        @else
                            <div class="px-2 py-1 bg-green-900 text-white rounded inline-block mb-1.5">{{ Auth::user()->idioma->nombre }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex w-2/3 p-10 pl-0">
                <div class="flex flex-col gap-5 text-white relative
                    h-full w-full border-4 p-10 pl-14 border-slate-700 rounded-xl bg-white/4">
                    <h1 class="text-3xl">Amigos</h1>
                    @foreach (Auth::user()->amigos as $amigo)
                        <div class="flex flex-wrap items-center gap-2 text-white relative h-10">
                            <img src="{{ asset('img/UserIcon.png') }}" alt="UserImg" class="w-10 h-10 rounded-full border-1 border-black">
                            <span class="sm:inline">{{ $amigo->name }}</span>
                        </div>
                    @endforeach
                    @if (Auth::user()->amigos->isEmpty())
                        <div class="p-5 text-slate-600 text-xl">Aun no tienes a nadie como amigo...</div>
                    @endif
                </div>
            </div>
        </div>
        <a href="/cerrar_sesion" class="transition-all duration-200 px-6 py-2 ml-10 bg-red-800 rounded-lg hover:bg-red-900 text-gray-300 hover:text-white">Cerrar Sesion</a>
    </body>
</html>