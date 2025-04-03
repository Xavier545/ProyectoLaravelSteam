<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        @livewireStyles
    </head>
    <body class="bg-[#0e1626]">
        <x-navbar/>
        <h1 class="text-white text-4xl p-6 pl-10">{{ $juego->nombre }}</h1>
        <div class="flex flex-wrap">
            <div class="flex text-white relative
            h-50 w-full border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                <div class="bg-[url('{{ asset('img/gamePlaceholder.jpg') }}')] bg-left bg-no-repeat bg-cover relative h-full w-2/6">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                    </div>
                </div>
                <div class="flex flex-col items-end justify-between bg-slate-800 h-full w-4/6 p-5 text-right">
                    <h1 class="text-2xl">{{ $juego->precio }} €</h1>
                    <div class="flex justify-end gap-2">
                        <div>
                            @foreach($juego->idiomas as $idioma)
                                <div class="px-2 py-1 bg-green-900 text-white rounded inline-block mb-1.5">{{ $idioma->nombre }}</div>
                            @endforeach
                        </div>
                        <div>
                            @foreach($juego->plataformas as $plataforma)
                                <div class="px-2 py-1 bg-red-900 text-white rounded inline-block mb-1.5">{{ $plataforma->nombre }}</div>
                            @endforeach
                        </div>
                        <div>
                            @foreach($juego->tags as $tag)
                                <div class="px-2 py-1 bg-blue-900 text-white rounded inline-block mb-1.5">{{ $tag->nombre }}</div>
                            @endforeach
                        </div>
                    </div>
                    @if (Auth::user() != null)
                        @if (Auth::user()->carrito->juegos->contains('id', $juego->id))
                            <div class="text-slate-300">¡En el carrito!</div>
                        @elseif (Auth::user()->juegos->contains('id', $juego->id))
                            <div class="text-slate-300">¡Ya Comprado!</div>
                        @else
                            <div class="flex items-center justify-center bg-black h-11 w-35">
                                <form action="/juego/carrito" method="POST" class="inline">
                                    @csrf
                                    <input type="hidden" name="juego_id" value="{{ $juego->id }}">
                                    <button type="submit" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</button>
                                </form>                                
                            </div>
                        @endif
                    @else
                        <div class="flex items-center justify-center bg-black h-11 w-35">
                            <a href="/login" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</a>
                        </div>
                    @endif
                    
                    <h1 class="text-slate-400">Edad Req. {{ $juego->clasificacion_edad }}</h1>
                </div>
            </div>
            {{-- DLCs --}}
            @foreach ($juego->dlcs as $dlc)
                <div class="flex text-white relative mt-0
                h-20 w-full border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                    <div class="bg-[url('{{ asset('img/gamePlaceholder.jpg') }}')] bg-left bg-no-repeat bg-cover relative h-full w-1/6">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-slate-800">
                        </div>
                    </div>
                    <div class="flex justify-between bg-slate-800 h-full w-5/6 p-5">
                        <div class="text-2xl">
                            <span>{{ $dlc->nombre }}</span>
                            <span class="text-slate-500 text-sm">DLC</span>
                        </div>
                        <div class="flex items-center gap-4">
                            @if (Auth::user() != null)
                                @if (Auth::user()->carrito->dlcs->contains('id', $dlc->id))
                                    <div class="text-slate-300">¡En el carrito!</div>
                                @elseif (Auth::user()->dlcs->contains('id', $dlc->id))
                                    <div class="text-slate-300">¡Ya Comprado!</div>
                                @else
                                    <div class="flex items-center justify-center bg-black h-11 w-35">
                                        <form action="/dlc/carrito" method="POST" class="inline">
                                            @csrf
                                            <input type="hidden" name="dlc_id" value="{{ $dlc->id }}">
                                            <button type="submit" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</button>
                                        </form>                                        
                                    </div>
                                @endif
                            @else
                                <div class="flex items-center justify-center bg-black h-11 w-35">
                                    <a href="/login" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Añadir al Carro</a>
                                </div>
                            @endif
                            <div class="text-xl">{{ $dlc->precio }} €</div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- RESEÑAS --}}
            <h1 class="text-white text-3xl p-2 pl-10 w-full">Reseñas</h1>
            <div class="flex flex-wrap">
                @foreach($juego->resenyas as $resenya)
                    <div class="flex flex-col relative p-5 text-slate-400 gap-2
                    h-40 w-131 border-4 m-5 border-slate-700 rounded-xl bg-white/4">
                        <div class="h-1/3 flex items-center gap-2 justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/UserIcon.png') }}" alt="UserImg" class="w-10 h-10 rounded-full border-1 border-black">
                                <span>{{ $resenya->usuario->name }}</span>
                            </div>
                            <div>
                                @if ($resenya->positivo == true)
                                    <img src="{{ asset('img/positivo.png') }}" alt="positivo" class="bg-contain border-2 border-slate-900">
                                @elseif ($resenya->positivo == false)
                                    <img src="{{ asset('img/negativo.png') }}" alt="negativo" class="bg-contain border-2 border-slate-900">
                                @endif
                            </div>
                        </div>
                        <div class="h-2/3">{{$resenya->comentario}}</div>
                    </div>
                @endforeach
                @if($juego->resenyas->isEmpty())
                    <div class="pl-30 p-5 text-slate-600 text-xl">¡No hay reseñas aun!</div>
                @endif
            </div>
        </div>
    </body>
</html>