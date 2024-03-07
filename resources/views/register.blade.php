@extends('template')

@section('title', 'Crear cuenta')

@section('content')
<x-wrapper>
    <x-slot name="title">Crear cuenta</x-slot>

                <form action="">
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

                    <div class="flex items-center gap-4 justify-end mt-8">
                        <x-link href="/login">Estoy registrado</x-link>
                        <x-button>Registrarse</x-button>                       
                    </div>
                </form>
</x-wrapper>
@endsection
