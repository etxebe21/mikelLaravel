@extends('template')

@section('content')

<div class="py-1 z-0" style="background-image: url('{{ URL::asset("img/7.png") }}'); background-size: cover; background-position: center; height: 100vh;">
 
    <div class="max-w-3xl mx-auto bg-white bg-opacity-25 rounded-md mb-6">
        <div class="grid grid-cols-1">
            <div class="col-span-1 flex justify-center">
                <h1 class="mt-4 mb-4 text-center text-3xl font-bold text-green-800">
                    Editar Vivienda
                </h1>
            </div>
        </div>
    </div>
    <div class="bg-white max-w-3xl mx-auto rounded shadow-xl p-6 lg:p-8">
        <form action="{{ route('actualizar-vivienda', $vivienda->ID_VIVIENDA) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="ID_EDIFICIO" class="block text-lg font-medium text-gray-900">ID Edificio</label>
                <input type="number" name="ID_EDIFICIO" id="ID_EDIFICIO" value="{{ old('ID_EDIFICIO', $vivienda->ID_EDIFICIO) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="CODIGO_VIVIENDA" class="block text-lg font-medium text-gray-900">Código de la Vivienda</label>
                <input type="text" name="CODIGO_VIVIENDA" id="CODIGO_VIVIENDA" value="{{ old('CODIGO_VIVIENDA', $vivienda->CODIGO_VIVIENDA) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="PISO" class="block text-lg font-medium text-gray-900">Piso</label>
                <input type="text" name="PISO" id="PISO" value="{{ old('PISO', $vivienda->PISO) }}" class="block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualizar Vivienda
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
