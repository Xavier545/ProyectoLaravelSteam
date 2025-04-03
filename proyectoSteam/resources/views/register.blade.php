<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-[#0e1626] text-white h-screen flex flex-col relative justify-center items-center">
        <div class="flex relative">
            <form action="/register" class="flex flex-col gap-5 items-center relative h-full w-full min-w-[200px] border-4 p-10 border-slate-700 rounded-xl bg-white/4" method="POST">
                @csrf
                <h1 class="text-white text-4xl">Registrarse</h1>

                <div class="flex relative">
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="name">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Nombre
                    </label>
                </div>

                <div class="flex relative">
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="email">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Correo
                    </label>
                </div>

                <div class="flex relative">
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="password">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Contraseña
                    </label>
                </div>

                <div class="flex relative">
                    <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
                    text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
                    placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
                    disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="password_confirmation">
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-60 select-none
                    text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1
                    before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l
                    before:border-gray-500 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border
                    after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200
                    after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500
                    peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px]
                    peer-focus:leading-tight peer-focus:text-blue-800 peer-focus:before:border-t-2 peer-focus:before:border-l-2
                    peer-focus:before:!border-blue-800 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-blue-800
                    peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent
                    peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Reescribre Contraseña
                    </label>
                </div>

                @if ($errors->any())
                    <div class="text-red-500 text-wrap w-60">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <input type="submit" value="Registrarse" class="h-10 w-25 bg-blue-800 text-white rounded
                transition-all duration-100 hover:bg-blue-700 hover:scale-95 active:scale-90 cursor-pointer">

                <div class="text-gray-600 h-10 w-50 text-center text-sm">Si ya tienes una cuenta 
                    <a href="/login" class="text-blue-500">Inicia Sesion</a>
                     ahora!
                </div>
            </form>
        </div>
    </body>
</html>