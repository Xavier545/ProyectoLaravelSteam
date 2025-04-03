<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        @livewireStyles
    </head>
    <body class="bg-[#0e1626]">
        <x-navbar/>
        <h1 class="text-white text-4xl p-10">Tienda</h1>
        <div class="flex flex-wrap">
            @foreach ($allAccountGames as $juego)
                <a href="/tienda/{{ $juego->id }}" class="transition-transform duration-100 hover:scale-102 active:scale-98">
                    <div class="flex text-white relative
                    h-40 w-131 border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                        <div class="bg-[url('{{ asset('img/gamePlaceholder.jpg') }}')] bg-left bg-no-repeat bg-cover relative h-full w-2/6">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                                <h1  class="p-5 pr-0 text-2xl text-right absolute left-10
                                [text-shadow:2px_2px_0_black,-2px_2px_0_black,2px_-2px_0_black,-2px_-2px_0_black]">{{ $juego->nombre }}</h1>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between bg-slate-800 h-full w-4/6 p-5 text-right">
                            <h1 class="text-2xl">{{ $juego->precio }} €</h1>
                            <h1 class="text-slate-400">Edad Req. {{ $juego->clasificacion_edad }}</h1>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </body>
</html>