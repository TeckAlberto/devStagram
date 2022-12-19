@extends('layouts.app')


@section('titulo')
    Crea una nueva Publicacion
@endsection


@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />    
@endpush


@section('contenido')
    <div class="md:flex md:items-center">
        <div class="px-10 md:w-1/2">
            <form id="dropzone" class="flex flex-col items-center justify-center w-full border-dashed rounded dropzone borde-2 h-96" action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            </form>
        </div>
        
        <div class="p-10 mt-10 bg-white rounded-lg shadow-xl md:w-1/2 md:mt-0">
            <form action="{{route('posts.store')}}" method="POST" novalidate>
                    @csrf
                    
                    <div class="mb-5">
                        <label for="titulo" class="block mb-2 font-bold text-gray-500 uppercase">
                            Titulo
                        </label>
                        <input 
                            type="text"
                            name="titulo"
                            placeholder="Titulo de la Publicacion"
                            id="titulo"
                            class="w-full p-3 border rounded-lg 
                                @error('titulo')
                                     border-red-500
                                @enderror"
                            value = "{{old('titulo')}}"
                        >

                        @error('titulo')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="descripcion" class="block mb-2 font-bold text-gray-500 uppercase">
                            Descripcion
                        </label>
                        <textarea
                            name="descripcion"
                            placeholder="Descripcion de la Publicacion"
                            id="descripcion"
                            class="w-full p-3 border rounded-lg 
                                @error('descripcion')
                                     border-red-500
                                @enderror"
                        >{{old('descripcion')}}</textarea>

                        @error('descripcion')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-5" >
                        <input 
                            type="hidden"
                            name="imagen"
                            value="{{old('imagen')}}"

                        >

                        @error('imagen')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>

                    <input type="submit" value="Publicar" class="w-full p-3 font-bold text-white uppercase rounded-lg cursor-pointer bg-sky-600 hover:bg-sky-700 transiti-colors">
            </form>
        </div>
    </div>
@endsection