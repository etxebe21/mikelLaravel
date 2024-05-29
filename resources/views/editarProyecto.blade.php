@extends('template')

@section('content')
<div class="py-1 z-0 " style="background-image:url('{{URL::asset("img/login.jpg")}}'); background-size: cover; background-position: center; height: 100vh;">
    <div class="max-w-3xl mx-auto bg-white bg-opacity-25 rounded-md mb-6">
        <div class="grid grid-cols-1">
            <div class="col-span-1 flex justify-center">
                <h1 class="mt-2 mb-4 text-center text-3xl font-bold text-green-800">
                    Editar Proyecto
                </h1>
            </div>
        </div>
    </div>
    <div class="bg-white max-w-3xl mx-auto rounded shadow-xl p-6 lg:p-8" >
        <form action="{{ route('actualizar-proyecto', $proyecto->ID_PROYECTO) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="NOMBRE_PROYECTO" class="block text-lg font-medium text-gray-900">Nombre del Proyecto</label>
                <input type="text" name="NOMBRE_PROYECTO" id="NOMBRE_PROYECTO" value="{{ old('NOMBRE_PROYECTO', $proyecto->NOMBRE_PROYECTO) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="CODIGO_PROYECTO" class="block text-lg font-medium text-gray-900">Código del Proyecto</label>
                <input type="text" name="CODIGO_PROYECTO" id="CODIGO_PROYECTO" value="{{ old('CODIGO_PROYECTO', $proyecto->CODIGO_PROYECTO) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="DIRECCION" class="block text-lg font-medium text-gray-900">Dirección</label>
                <input type="text" name="DIRECCION" id="DIRECCION" value="{{ old('DIRECCION', $proyecto->DIRECCION) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="POBLACION" class="block text-lg font-medium text-gray-900">Población</label>
                <input type="text" name="POBLACION" id="POBLACION" value="{{ old('POBLACION', $proyecto->POBLACION) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="N_EDIFICIOS" class="block text-lg font-medium text-gray-900">Número edificios</label>
                <input type="text" name="N_EDIFICIOS" id="N_EDIFICIOS" value="{{ old('N_EDIFICIOS', $proyecto->N_EDIFICIOS) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualizar Proyecto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
