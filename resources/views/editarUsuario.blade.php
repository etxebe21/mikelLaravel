@extends('template')

@section('content')
<div class="py-1 z-0 " style="background-image:url('{{URL::asset("img/7.png")}}'); background-size: cover; background-position: center; height: 100vh;">

    <div class="max-w-3xl mx-auto bg-white bg-opacity-25 rounded-md mb-6 px-4">
        <div class="grid grid-cols-1">
            <div class="col-span-1 flex justify-center">
                <h1 class="mt-2 mb-4 text-center text-3xl font-bold text-green-800">
                    Editar Usuario
                </h1>
            </div>
        </div>
    </div>
    <div class="max-w-3xl mx-auto bg-white rounded shadow-xl p-6 lg:p-8 px-4">
        <form action="{{ route('actualizar-usuario', $usuario->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-900">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name', $usuario->name) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="tipo_usuario" class="block text-lg font-medium text-gray-900">Tipo de Usuario</label>
                <select name="tipo_usuario" id="tipo_usuario" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                    <option value="1" {{ $usuario->tipo_usuario == 1 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ $usuario->tipo_usuario == 2 ? 'selected' : '' }}>Usuario</option>
                </select>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualizar Usuario
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
