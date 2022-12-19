@extends('layouts.app')


@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:justify-center md:flex md:gap-10 md:items-center">
        <div class="p-5 md:w-6/12">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen-registro" >
        </div>
        
        <div class="p-6 bg-white rounded-lg shadow-xl md:w-4/12">
                <form action={{route('register')}} method="POST" novalidate>
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="block mb-2 font-bold text-gray-500 uppercase">
                            Nombre
                        </label>
                        <input 
                            type="text"
                            name="name"
                            placeholder="Tu nombre"
                            id="name"
                            class="w-full p-3 border rounded-lg 
                                @error('name')
                                     border-red-500
                                @enderror"
                            value = "{{old('name')}}"
                        >

                        @error('name')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username" class="block mb-2 font-bold text-gray-500 uppercase">
                            Username
                        </label>
                        <input 
                            type="text"
                            name="username"
                            placeholder="Tu username"
                            id="username"
                            class="w-full p-3 border rounded-lg 
                                @error('username')
                                     border-red-500
                                @enderror"
                            value = "{{old('username')}}"
                        >
                        @error('username')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 font-bold text-gray-500 uppercase">
                            Email
                        </label>
                        <input 
                            type="email"
                            name="email"
                            placeholder="Email de Regsitro"
                            id="email"
                            class="w-full p-3 border rounded-lg 
                                @error('email')
                                     border-red-500
                                @enderror"
                            value = "{{old('email')}}"
                        >
                        @error('email')
                            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 font-bold text-gray-500 uppercase">
                            Password
                        </label>
                        <input 
                            type="password"
                            name="password"
                            placeholder="Password de Registro"
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
                        <label for="password_confirmation" class="block mb-2 font-bold text-gray-500 uppercase">
                            Repetir Password
                        </label>
                        <input 
                            type="password"
                            name="password_confirmation"
                            placeholder="Repite tu Password"
                            id="password_confirmation"
                            class="w-full p-3 border rounded-lg"
                        >
                    </div>
                    <input type="submit" value="Crear Cuenta" class="w-full p-3 font-bold text-white uppercase rounded-lg cursor-pointer bg-sky-600 hover:bg-sky-700 transiti-colors">
                </form>
            </div>
    </div>
@endsection