<div class="max-w-7xl mx-auto bg-white bg-opacity-25 rounded-md mb-6" >
    <div class="grid grid-cols-4  ">
        <div class="col-span-1 flex justify-center">
                <x-application-logo class=" rounded-md " />
        </div>
        <div class="col-span-3">
            <h1 class="mt-6 text-center text-3xl font-bold text-green-800">
                LISTA DE EDIFICIOS            </h1>
            <div class="mx-auto my-4 flex justify-center">   
            </div>
            <p class="mt-6 text-gray-900  text-center italic font-bold  leading-relaxed">
               Aquí puede ver los edificios vincualdos a la plataforma
            </p>
        </div>
    </div>
</div>
<div class="bg-white  rounded shadow-xl p-6 lg:p-8">
    @isset($edificio->ID_PROYECTO)
        <div class="w-full p-6 grid grid-cols-6">
            <div class="col-span-4 p-2">
                <h5 class="text-xl text-gray-600">Edificios del proyecto <span class="uppercase underline font-bold">{{$proyectos->NOMBRE_PROYECTO}}</span></h5>
            </div>
            <div class="col-span-2 text-right">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <a
                        href="{{route('home', $ID_PROYECTO)}}"
                        class="inline-flex items-center flex-col px-5 py-3 text-white bg-blue-700 hover:bg-blue-800 rounded-s-md ">
                        <i class="fa-solid fa-circle-info text-xl m-2"></i>
                        </a>
                        <a
                        href="{{route('home', $ID_PROYECTO)}}"
                        class="inline-flex items-center flex-col px-5 py-3 text-white text-center bg-green-700 hover:bg-green-800 focus:ring-4 rounded-e-md ">
                        <i class="fa-solid fa-plus text-xl m-2"></i>
                        </a>
                    </div>
            </div>
        </div>
        @endisset
        <table class="min-w-full uppercase text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
                <tr class="border-b border-green-200 bg-plat-green text-green-700">
                    <th scope="col" class="px-6 py-4 text-lg text-center">NOMBRE</th>
                    <th scope="col" class="px-6 py-4 text-lg text-center">DIRECCION</th>
                    <th scope="col" class="px-6 py-4 text-lg text-center">CODIGO_EDIFICIO</th>
                    <th scope="col" class="px-6 py-4 text-lg text-center">POBLACION</th>
                    <th scope="col" class="px-6 py-4 text-lg text-center">AÑO</th>
                    <th scope="col" class="px-2 py-4 text-lg text-center">CALIFICACION</th>
                    <th scope="col" class="px-2 py-4 text-lg text-center">VIVIENDAS</th>
                    <th scope="col" class="px-2 py-4 text-lg text-center"></th>
                    <th scope="col" class="px-2 py-4 text-lg text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($edificios as $key=>$edificio )
                <tr class="border-b dark:border-neutral-500">
                        <td class="px-6 py-4 text-center">{{$edificio->NOMBRE}}</td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$edificio->DIRECCION}}</td>
                        <td class="px-6 py-4 text-center">{{$edificio->CODIGO_EDIFICIO}}</td>
                        <td class="px-6 py-4 text-center">{{$edificio->POBLACION}}</td>
                        <td class="px-6 py-4 text-center">{{$edificio->YEAR_CONSTRUCCION}}</td>
                        <td class="px-2 py-4 text-center">{{$edificio->CALIFICACION_ENERGETICA}}</td>
                        <td class="px-2 py-4 text-center">{{$edificio->N_VIVIENDAS}}</td>
                        <td class="whitespace-nowrap px-2 py-4 text-right"> 
                                <button id="dropdownInformationButton_{{$key}}" data-dropdown-toggle="dropdownInformation_{{$key}}"
                                class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xl px-5 py-3 text-center inline-flex items-center " type="button">
                                    <i class="fa-solid fa-gear"></i>
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                </button>
                                    <!-- Dropdown menu -->
                                <div id="dropdownInformation_{{$key}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-96 ">
                                    <div class="px-4 py-3 text-md bg-plat-green text-black ">
                                        <div>OPCIONES</div>
                                        <div class="font-medium text-xs truncate">{{$edificio->CODIGO_EDIFICIO}}</div>
                                    </div>
                                    <ul class="text-lg text-white font-medium" aria-labelledby="dropdownInformationButton">
                                        <li class="border-b border-green-500">
                                            <a href="javascript:void(0);" onclick="eliminarEdificio({{ $edificio->ID_EDIFICIO}})"
                                                class="block px-4 py-3 text-gray-700 hover:bg-red-600 hover:text-white">
                                                <i class="fa-solid fa-trash mr-2"></i> ELIMINAR
                                            </a>
                                        </li>
                                         <li  class="border-b border-green-500">
                                            <a href="{{route('lista-viviendas', $edificio->ID_EDIFICIO)}}" 
                                                class="block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white">
                                                <i class="fa-solid fa-house-chimney-user mr-2"></i> VIVIENDAS
                                            </a>
                                        </li>  
                                        <li  class="border-b border-green-500">
                                             <a href="{{route('home', $edificio->ID_EDIFICIO)}}"
                                                class="opacity-50 pointer-events-none block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white">
                                                <i class="fa-solid fa-chart-simple  text-2xl"></i> MONITORIZACION 
                                            </a> 
                                        </li>
                                    </ul>

                                </div>
                        </td> 
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script>
    function eliminarEdificio(idEdificio) {
        if (confirm("¿Estás seguro de que deseas eliminar este edificio?")) {
            window.location.href = "/eliminar-edificio/" + idEdificio;
        }
    }
</script>