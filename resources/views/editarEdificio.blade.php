@extends('template')
@section('content')
<div class="py-1 z-0 " style="background-image:url('{{URL::asset("img/edificio.jpg")}}'); background-size: cover; background-position: center; height: 100vh;">

    <div class="max-w-3xl mx-auto bg-white  rounded-md mb-6">
        <div class="grid grid-cols-1">
            <div class="col-span-1 flex justify-center">
                <h1 class="mt-2 mb-4 text-center text-3xl font-bold text-green-800">
                    Editar Edificio
                </h1>
            </div>
        </div>
    </div>
    <div class="bg-white max-w-3xl mx-auto rounded shadow-xl p-6 lg:p-8" >
        <form action="{{ route('actualizar-edificio', $edificio->ID_EDIFICIO) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="NOMBRE" class="block text-lg font-medium text-gray-900">Nombre del Edificio</label>
                <input type="text" name="NOMBRE" id="NOMBRE" value="{{ old('NOMBRE', $edificio->NOMBRE) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="DIRECCION" class="block text-lg font-medium text-gray-900">Dirección</label>
                <input type="text" name="DIRECCION" id="DIRECCION" value="{{ old('DIRECCION', $edificio->DIRECCION) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="POBLACION" class="block text-lg font-medium text-gray-900">Población</label>
                <input type="text" name="POBLACION" id="POBLACION" value="{{ old('POBLACION', $edificio->POBLACION) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="ID_PROYECTO" class="block text-lg font-medium text-gray-900">ID Proyecto</label>
                <input type="number" name="ID_PROYECTO" id="ID_PROYECTO" value="{{ old('ID_PROYECTO', $edificio->ID_PROYECTO) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="CODIGO_EDIFICIO" class="block text-lg font-medium text-gray-900">Código del Edificio</label>
                <input type="text" name="CODIGO_EDIFICIO" id="CODIGO_EDIFICIO" value="{{ old('CODIGO_EDIFICIO', $edificio->CODIGO_EDIFICIO) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="N_VIVIENDAS" class="block text-lg font-medium text-gray-900">Número de Viviendas</label>
                <input type="number" name="N_VIVIENDAS" id="N_VIVIENDAS" value="{{ old('N_VIVIENDAS', $edificio->N_VIVIENDAS) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="CALIFICACION_ENERGETICA" class="block text-lg font-medium text-gray-900">Calificación Energética</label>
                <input type="text" name="CALIFICACION_ENERGETICA" id="CALIFICACION_ENERGETICA" value="{{ old('CALIFICACION_ENERGETICA', $edificio->CALIFICACION_ENERGETICA) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualizar Edificio
                </button>
            </div>
        </form>
    </div>
</div>
@endsection