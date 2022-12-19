@extends('layouts.app')


@section('titulo')
    Inicia Secion en DevStatgram 
@endsection

@section('contenido')
    <div class="md:justify-center md:flex md:gap-10 md:items-center">
        <div class="p-5 md:w-6/12">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen-login" >
        </div>
        
        <div class="p-6 bg-white rounded-lg shadow-xl md:w-4/12">
                <form method="POST" action="{{route('login')}}" novalidate>
                    @csrf

                    
                    @if(session('mensaje'))
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> 
                            {{session('mensaje')}}
                        </p>
                    @endif
                    
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
                        <input type="checkbox" name="remember"><label class="text-sm text-gray-500">Mantener mi secion abierta</label>   
                    </div>

                    <input type="submit" value="Iniciar Sesion" class="w-full p-3 font-bold text-white uppercase rounded-lg cursor-pointer bg-sky-600 hover:bg-sky-700 transiti-colors">
                </form>
            </div>
    </div>
@endsection