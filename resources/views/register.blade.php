@extends('template')

@section('title', 'Crear cuenta')

@section('content')
<x-wrapper>
    <x-slot name="title">Crear cuenta</x-slot>

                <form action="">
                    <div>
                        <label class="text-sm text-gray-700">Nombre</label>
                        <input type="text" name="name" 
                        class="rounded shadow border border-gray-300 p-2 mt-1 w-full "> 
                    </div>
                    <div>
                        <label class="text-sm text-gray-700">Email</label>
                        <input type="text" name="email" 
                            class="rounded shadow border border-gray-300 p-2 mt-1 w-full "> 
                    </div>
                    <div>
                        <label class="text-sm text-gray-700">Password</label>
                        <input type="password" name="password" 
                            class="rounded shadow border border-gray-300 p-2 mt-1 w-full "> 
                    </div>

                    <div class="flex items-center gap-4 justify-end mt-8">
                        <a href="/login" class="underline text-sm text-gray-600 hover:text-gray-900 ">
                            Estoy registrado</a>
                        <button type="submit" class="px-4 py-2 bg-blue-600 sm:rounded">Registrarse</button>
                    </div>
                </form>
</x-wrapper>
@endsection
