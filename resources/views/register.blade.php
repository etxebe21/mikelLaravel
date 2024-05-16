@extends('template')

@section('title', 'Crear cuenta')

@section('content')
<x-wrapper>
    <x-slot name="title">Crear cuenta</x-slot>

    <form action="{{ route('register') }}" method="POST">
        @csrf <!-- Agregar un token CSRF para protección -->
        <div>
            <x-label>Name</x-label>
            <x-input type="text" name="name"></x-input>
        </div>
        <div>
            <x-label>Email</x-label>
            <x-input type="text" name="email"></x-input>
        </div>
        <div>
            <x-label>Password</x-label>
            <x-input type="password" name="password"></x-input>
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
