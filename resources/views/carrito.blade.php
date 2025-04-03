<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.5"></script> --}}
    </head>
    <body class="bg-[#0e1626] h-screen">
        <x-navbar/>
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
                        @foreach ($allInCartGames as $juego)
                            <tr class="bg-white/5 text-left text-white border-b border-gray-700">
                                <td class="p-2">{{ $juego->nombre }}</td>
                                <td class="p-2">{{ $juego->precio }} €</td>
                                <td class="p-2">
                                    <form action="/juego/carrito/{{ $juego->pivot->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Quitar" class="h-8 w-20 bg-red-800 text-white rounded
                                        transition-all duration-100 hover:bg-red-900 hover:scale-95 active:scale-90 cursor-pointer">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @foreach ($allInCartDlcs as $dlc)
                            <tr class="bg-white/5 text-left text-white border-b border-gray-700">
                                <td class="p-2">{{ $dlc->nombre }} <span class="text-slate-500 text-sm">DLC</span></td>
                                <td class="p-2">{{ $dlc->precio }} €</td>
                                <td class="p-2">
                                    <form action="/dlc/carrito/{{ $dlc->pivot->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Quitar" class="h-8 w-20 bg-red-800 text-white rounded
                                        transition-all duration-100 hover:bg-red-900 hover:scale-95 active:scale-90 cursor-pointer">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if ($allInCartDlcs->isEmpty() && $allInCartGames->isEmpty())
                            <tr class="bg-white/5 text-left text-white border-b border-gray-700">
                                <td colspan="3" class="p-5 text-slate-500 text-sm">Aun no has puesto nada en el carrito...</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="flex text-white relative items-center justify-center
                h-20 w-82 border-4 m-6 border-slate-700 rounded-xl bg-white/4">
                <span class="text-slate-500 text-xl mr-3">Precio Total: {{ $totalPrecio }}€</span>
                <div class="flex items-center justify-center bg-black h-9 w-21 mr-3">
                    <a href="/comprar" class="flex bg-lime-700 hover:bg-lime-800 h-7 p-2 items-center">Comprar</a>
                </div>
            </div>
        </div>
    </body>
</html>