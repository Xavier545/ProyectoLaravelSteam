@extends('admin')
@section('gestion')
    <div class="p-6 w-full flex flex-col gap-7">
        
        <form action="/plataforma/{{ $plataforma->id }}" class="relative h-11 w-full min-w-[200px]" method="POST">
            @csrf
            <input type="hidden" name="plataforma_id" value="{{ $plataforma->id }}">

            <input class="peer h-full w-60 rounded-md border border-gray-500 bg-transparent px-3 py-3 font-sans text-sm font-normal
            text-blue-gray-700 outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200
            placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-800 focus:border-t-transparent focus:outline-0
            disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="nombre" value="{{ $plataforma->nombre }}">
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

            <input type="submit" value="Subir" class="h-10 w-20 bg-blue-600 text-white rounded
            transition-all duration-100 hover:bg-blue-700 hover:scale-95 active:scale-90 cursor-pointer">

        </form>

        @if ($errors->any())
            <div class="text-red-500">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif
    </div>
@endsection