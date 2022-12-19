@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{auth()->user()->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center ">
        <div class="p-6 bg-white shadow md:w-1/2">
            <form action="{{route('perfil.store')}}" method="POST" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                 @if(session('mensaje'))
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> 
                            {{session('mensaje')}}
                        </p>
                    @endif
                    <div class="mb-5">
                        <label for="username" class="block mb-2 font-bold text-gray-500 uppercase">
                            Username
                        </label>
                        <input 
                            type="text"
                            name="username"
                            placeholder="Tu nombre de Usuario"
                            id="username"
                            class="w-full p-3 border rounded-lg 
                                @error('username')
                                     border-red-500
                                @enderror"
                            value = "{{auth()->user()->username}}"
                        >

                        @error('username')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 font-bold text-gray-500 uppercase">
                            Correo
                        </label>
                        <input 
                            type="email"
                            name="email"
                            placeholder="Tu nombre de Usuario"
                            id="email"
                            class="w-full p-3 border rounded-lg 
                                @error('email')
                                     border-red-500
                                @enderror"
                            value = "{{auth()->user()->email}}"
                        >

                        @error('email')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="imagen" class="block mb-2 font-bold text-gray-500 uppercase">
                            Imagen Perfil
                        </label>
                        <input 
                            type="file"
                            name="imagen"
                            id="imagen"
                            accept=".jpeg, .jpg, .png"
                            class="w-full p-3 border rounded-lg" 
                            value = ""
                        >

                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 font-bold text-gray-500 uppercase">
                            Confirmacion de Password
                        </label>
                        <input 
                            type="password"
                            name="password"
                            placeholder="Confirmacion de Password"
                            id="password"
                            class="w-full p-3 border rounded-lg 
                                @error('password')
                                     border-red-500
                                @enderror"
                        >
                        @error('password')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="newpassword" class="block mb-2 font-bold text-gray-500 uppercase">
                            Password
                        </label>
                        <input 
                            type="password"
                            name="newpassword"
                            placeholder="Password Nuevo"
                            id="newpassword"
                            class="w-full p-3 border rounded-lg 
                                @error('newpassword')
                                     border-red-500
                                @enderror"
                        >
                        @error('newpassword')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <input type="submit" value="Guardar Cambios" class="w-full p-3 font-bold text-white uppercase rounded-lg cursor-pointer bg-sky-600 hover:bg-sky-700 transiti-colors">
            </form>
        </div>
    </div>
@endsection