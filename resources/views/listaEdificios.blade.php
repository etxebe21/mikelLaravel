@extends('template')

@section('content')
<div class="bg-white rounded shadow-xl p-6 lg:p-8">
    {{-- @isset($ID_PROYECTO)
        <div class="w-full p-6 grid grid-cols-6">
            <div class="col-span-4 p-2">
                <h5 class="text-xl text-gray-600">Edificios del proyecto <span class="uppercase underline font-bold">{{$proyecto->NOMBRE_PROYECTO}}</span></h5>
            </div>
            <div class="col-span-2 text-right">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <a
                        href="{{route('proyecto.show', $ID_PROYECTO)}}"
                        class="inline-flex items-center flex-col px-5 py-3 text-white bg-blue-700 hover:bg-blue-800 rounded-s-md ">
                        <i class="fa-solid fa-circle-info text-xl m-2"></i>
                        </a>
                        <a
                        href="{{route('edificios.add', $ID_PROYECTO)}}"
                        class="inline-flex items-center flex-col px-5 py-3 text-white text-center bg-green-700 hover:bg-green-800 focus:ring-4 rounded-e-md ">
                        <i class="fa-solid fa-plus text-xl m-2"></i>
                        </a>
                    </div>
            </div>
        </div>
        @endisset --}}
        <table class="min-w-full uppercase text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
                <tr class="border-b border-green-200 bg-plat-green text-orange-600">
                    <th scope="col" class="px-6 py-4 text-lg text-center">NOMBRE</th>
                    <th scope="col" class="px-6 py-4 text-lg text-center">POBLACION</th>
                    {{-- <th scope="col" class="px-6 py-4 text-lg text-center">AÑO</th> --}}
                    {{-- <th scope="col" class="px-2 py-4 text-lg text-center">CALIFICACION</th> --}}
                    <th scope="col" class="px-2 py-4 text-lg text-center">VIVIENDAS</th>
                    {{-- <th scope="col" class="px-2 py-4 text-lg text-center">MONIT.</th> --}}
                    <th scope="col" class="px-2 py-4 text-lg text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($edificios as $key=>$edificio )
                <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">
                                @if($edificio->DIRECCION!=null)
                                        {{$edificio->DIRECCION}}
                                {{-- @else
                                        {{$edificio->CODIGO_EDIFICIO}} --}}
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center">{{$edificio->POBLACION}}</td>
                            {{-- <td class="px-6 py-4 text-center">{{$edificio->YEAR_CONSTRUCCION}}</td> --}}
                            {{-- <td class="px-2 py-4 text-center">{{$edificio->CALIFICACION_ENERGETICA}}</td> --}}
                            <td class="px-2 py-4 text-center">{{$edificio->N_VIVIENDAS}}</td>
                            {{-- <td class="px-2 py-4 text-center">{{$edificio->MONITORIZADAS}}</td> --}}
                            {{-- <td class="whitespace-nowrap px-2 py-4 text-right">
                                    <button id="dropdownInformationButton_{{$key}}" data-dropdown-toggle="dropdownInformation_{{$key}}"
                                    class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xl px-5 py-3 text-center inline-flex items-center " type="button">
                                        <i class="fa-solid fa-gear"></i>
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                            </svg>
                                    </button>
                                        <!-- Dropdown menu -->
                                    <div id="dropdownInformation_{{$key}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-96 ">
                                        <div class="px-4 py-3 text-sm bg-plat-green text-white ">
                                            <div>OPCIONES</div>
                                            <div class="font-medium text-xs truncate">{{$edificio->CODIGO_EDIFICIO}}</div>
                                        </div>
                                        <ul class="text-lg text-white font-medium" aria-labelledby="dropdownInformationButton">
                                            <li class="border-b border-green-500">
                                                <a href="{{route('edificio.info', $edificio->ID_EDIFICIO)}}"
                                                    class="block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white">
                                                    <i class="fa-solid fa-circle-info mr-2"></i> DATOS BÁSICOS
                                                </a>
                                            </li>
                                            <li  class="border-b border-green-500">
                                                <a href="{{route('edificio.show', $edificio->ID_EDIFICIO)}}"
                                                    class="block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white @if($edificio->VIVIENDAS==0) text-gray-100 pointer-events-none opacity-50 hover:cursor-not-allowed @endif" @if($edificio->VIVIENDAS==0) disabled @endif>
                                                    <i class="fa-solid fa-house-chimney-user mr-2"></i> VIVIENDAS
                                                </a>
                                            </li>
                                            <li  class="border-b border-green-500">
                                                <a href="{{route('edificio.panels', $edificio->ID_EDIFICIO)}}"
                                                    class="opacity-50 pointer-events-none block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white">
                                                    <i class="fa-solid fa-table mr-2"></i> CUADROS DE MANDO</a>
                                            </li>
                                            
                                            <li  class="border-b border-green-500">
                                                <a href="{{route('edificio.medidores', $edificio->ID_EDIFICIO)}}"
                                                    class="block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white">
                                                    <i class="fa-solid fa-chart-simple  text-2xl"></i> MONITORIZACION VIVIENDA
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                            </td> --}}
                        </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection