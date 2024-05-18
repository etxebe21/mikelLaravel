@extends('template')

@section('title', 'Login')

@section('content')
<x-wrapper>
    <x-slot name="title">Inicio de Sesión</x-slot>
    <form action="{{ route('login') }}" method="POST">
        @csrf <!-- Agregar un token CSRF para protección -->
        <div>
            <x-label>Email</x-label>
            <x-input type="text" name="email"></x-input> 
        </div>
        <div>
            <x-label>Password</x-label>
            <x-input type="password" name="password"></x-input> 
        </div>

        @error('error')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="flex items-center gap-4 justify-end mt-8">
            <x-link href="/register">Registrarse</x-link>
            <x-link href="/examples">Ejemplos</x-link>
            <x-button type="submit">Iniciar Sesión</x-button> <!-- Cambiar a type="submit" para enviar el formulario -->
        </div>
    </form>
</x-wrapper>
@endsection



