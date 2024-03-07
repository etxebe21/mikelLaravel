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
                        <a href="/login" class="underline text-sm text-gray-600 hover:text-gray-900 ">
                            Estoy registrado</a>
                        <button type="submit" class="px-4 py-2 bg-blue-600 sm:rounded">Registrarse</button>
                    </div>
                </form>
</x-wrapper>
@endsection
