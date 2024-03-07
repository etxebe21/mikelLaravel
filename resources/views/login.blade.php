@extends('template')

@section('title', 'Login')

@section('content')
<x-wrapper>
    <x-slot name="title">Inicio de Sesión</x-slot>
            <form action="">
                <div>
                    <x-label>Email</x-label>
                    <x-input type="text" name="email"></x-input> 
                </div>
                <div>
                    <x-label>Password</x-label>
                    <x-input type="password" name="password"></x-input> 
                </div>

                <div class="flex items-center gap-4 justify-end mt-8">
                    <x-link href="/register">Registrarse</x-link>
                    <button type="submit" class="px-4 py-2 bg-blue-600 sm:rounded">Iniciar sesión</button>
                </div>
            </form>
</x-wrapper>
 
@endsection