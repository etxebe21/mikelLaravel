@extends('template')

@section('title', 'Crear cuenta')

@section('content')
<x-wrapper>
    <x-slot name="title">Crear cuenta</x-slot>

    <form action="{{ route('register') }}" method="POST">
        @csrf <!-- Agregar un token CSRF para protección -->
        
        <div>
            <x-label>Nombre</x-label>
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-label>Email</x-label>            
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label>Password</x-label>            
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-label>Confirmar Contraseña</x-label>            
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <!-- Mostrar errores -->
        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex items-center gap-4 justify-end mt-8">
            <x-link href="/login">Estoy registrado</x-link>
            <x-button type="submit">Registrarse</x-button>                       
        </div>
    </form>
</x-wrapper>
@endsection
