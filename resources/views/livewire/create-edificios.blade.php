<div>
    <div class="bg-white min-h-screen overflow-hidden px-2 py-4 @if($currentStep != 0) hidden @endif">
        <div class="w-full flex py-12 mx-auto">
            <div class="max-w-8xl mx-auto grid grid-cols-3 py-4">
                <div class="col-span-1">
                    <div class="mt-6">
                        <img src="{{ URL::asset('img/logo3r.png') }}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 px-6 pt-4">
                    <h1 class="mt-6 text-center text-3xl font-medium text-gray-900">
                        Va a crear un edificio en Plataforma 3R
                    </h1>
                    <p class="mt-6 text-gray-400 text-center font-medium italic leading-relaxed">
                        Podrá definir una serie de apartados para describir las características del mismo.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center py-5">
            <button type="button" wire:click="nextStep" class="inline-block rounded bg-green-600 px-6 py-3 text-lg font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:bg-green-700">
                Comenzar proceso
            </button>
        </div>
    </div>

    <div class="bg-white min-h-screen overflow-hidden px-2 py-4 @if($currentStep != 1) hidden @endif">
        <div class="w-full flex py-12 mx-auto">
            <div class="max-w-8xl mx-auto grid grid-cols-3 py-4">
                <div class="col-span-1">
                    <div class="mt-6">
                        <img src="{{ URL::asset('img/logo3r.png') }}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 mb-6 py-4">
                    <h2 class="text-2xl font-extrabold">Identificar el edificio</h2>
                    <p class="my-4 text-lg text-gray-500">A continuación configurará un nombre para identificar el edificio.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500">Considere un nombre que pueda servir para identificar el edificio, que lo describa o lo ubique.</p>
                </div>
                <div class="col-span-3 mt-2 py-2">
                    <hr class="max-w-xl h-1 mx-auto my-4 bg-green-600 border-0 rounded">
                    <div class="grid grid-cols-6 pt-6">
                        <div class="col-span-4 col-start-2">
                            <div class="my-6 px-12 mx-auto">
                                <label for="NOMBRE" class="block mb-2 text-lg font-medium text-gray-900">Indique el nombre del edificio.</label>
                                <div class="inline-flex mx-auto w-full rounded-md shadow-sm">
                                    <button wire:click="resetNombreedificio" type="button" class="px-6 py-2 text-base font-medium text-white bg-red-700 rounded-s-lg hover:bg-red-800">
                                        <i class="fa-solid fa-arrow-rotate-right"></i>
                                    </button>
                                    <input type="text" id="NOMBRE" name="NOMBRE" wire:model="NOMBRE" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-e-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div class="my-6 px-12 mx-auto">
                                    <label for="NOMBRE_PROYECTO" class="block mb-2 text-lg font-medium text-gray-900">Seleccione el proyecto al que pertenece el edificio.</label>
                                    <select id="NOMBRE_PROYECTO" name="NOMBRE_PROYECTO" wire:model="NOMBRE_PROYECTO" wire:change="actualizarIdProyecto($event.target.value)" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="">Seleccione un proyecto</option>
                                        @foreach($proyectos as $proyecto)
                                        <option value="{{ $proyecto->NOMBRE_PROYECTO . '|' . $proyecto->ID_PROYECTO }}">{{ $proyecto->NOMBRE_PROYECTO }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="my-6 px-12 mx-auto text-center justify-center py-6">
                                <div class="inline-flex mx-auto rounded-md shadow-sm mt-4" role="group">
                                    <button wire:click="nextStep" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center inline-flex items-center">
                                        Continuar
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white min-h-screen overflow-hidden px-2 py-4  @if($currentStep!=2) hidden @endif">
        <div class="w-full py-12 mx-auto">
            <div class="max-w-6xl mx-auto py-4 ">
                <div class="mt-1 min-w-full md:mt-0 bg-white p-4">
                    <div class="space-y-6 bg-white px-4 py-1 sm:p-6">
                        <img  src="{{URL::asset('img/logo3r.png')}}" alt="" class="img-fluid w-half mx-auto py-2">
                        <h2 class="text-2xl font-extrabold text-center">Seleccionar ubicación del edificio</h2>
                        <p class=" my-4 text-lg text-gray-500">A continuación podrá seleccionar la ubicación del edificio, comenzando por la población, la direccion y el código.</p>
                        
                        <div class="py-6">
                            <hr class="max-w-xl h-1 mx-auto mt-4 bg-green-600 border-0 rounded md:my-10 ">
                            
                            <div class="grid grid-cols-3">
                                <div class="col-span-1 px-4 py-6 mt-6">
                                    <label for="POBLACION" class="block mb-2 text-lg font-medium text-gray-900">Indique el la población del edificio.</label>
                                    <input type="text" name="poblacion" id="poblacion" wire:model="POBLACION" class="my-5 block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline" placeholder="Población">
                                </div>
                                <div class="col-span-1  px-4 py-6 mt-6">
                                    <label for="DIRECCION" class="block mb-2 text-lg font-medium text-gray-900">Indique la dirección del edificio.</label>
                                    <input type="text" name="direccion" id="direccion" wire:model="DIRECCION" class="my-5 block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline" placeholder="Dirección">
                                </div>
                                <div class="col-span-1  px-4 py-6 mt-6">
                                    <label for="CÓDIGO" class="block mb-2 text-lg font-medium text-gray-900">Indique código del edificio.</label>
                                    <input type="text" name="codigo" id="codigo" wire:model="CODIGO_EDIFICIO" class="my-5 block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline" placeholder="Código">
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                {{$ID_PROYECTO}}
                                <div class="col-span-1 px-4 py-6 mt-6 w-1/3 ">
                                    <label for="CALIFICACION_ENERGETICA" class="block mb-2 text-lg font-medium text-gray-900">Indique la calificación energética del edificio.</label>
                                    <select name="CALIFICACION_ENERGETICA" id="CALIFICACION_ENERGETICA" wire:model="CALIFICACION_ENERGETICA" class="my-5 block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="{{$CALIFICACION_ENERGETICA}}">Seleccione una calificación</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <div class="my-6 px-12 mx-auto text-center justify-center py-6">
                                <div class="inline-flex mx-auto rounded-md shadow-sm mt-4" role="group">
                                    <button wire:click="nextStep" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center inline-flex items-center">
                                        Continuar
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>        
                        </div>                          
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="min-h-screen bg-white overflow-hidden px-2 py-4  @if($currentStep!=3) hidden @endif">
        <div class="w-full py-12 mx-auto">
            <div class="max-w-8xl mx-auto grid grid-cols-3 py-2 ">
                <div class="col-span-1 ">
                    <div class="mt-6">
                        <img  src="{{URL::asset('img/logo3r.png')}}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 mb-2 py-2">
                    <h2 class="text-2xl font-extrabold ">Configuración inicial del edificio</h2>
                    <p class="my-4 text-lg text-gray-500">A continuación comprobará si la caracterización del edificio es la adecuada.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500 ">Ha configurado el nombre del edificio y lo ha ubicado para generar un código para de este edificio.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500 ">Si es correcto, puede guardarlo para continuar con la configuración del mismo.</p>
                    <hr class="max-w-xl h-1 mx-auto mt-4 bg-green-600 border-0 rounded md:my-10 ">
                </div>
            </div>
            <div class="min-w-full grid grid-cols-6 py-2 px-6">
                <div class="col-span-3 py-2 px-6">
                        <div class="w-full text-gray-900 bg-white border border-gray-200 rounded-lg" >
                            <button type="button" class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                                <i class="fa-solid fa-tree-city mr-4"></i>
                                <span class="font-bold px-4">NOMBRE EDIFICIO:</span> <span class="text-gray-500 italic font-medium">{{$NOMBRE}}</span>
                            </button>
                            <button type="button" class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                                <i class="fa-solid fa-city mr-4"></i>
                                <span class="font-bold px-4">NOMBRE PROYECTO:</span> <span class="text-gray-500 italic font-medium">{{$NOMBRE_PROYECTO}}</span>
                            </button>
                            <button type="button" class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                                <i class="fa-solid fa-city mr-4"></i>
                                <span class="font-bold px-4">POBLACION:</span> <span class="text-gray-500 italic font-medium">{{$POBLACION}}</span>
                            </button>
                            <button type="button" class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                                <i class="fa-solid fa-city mr-4"></i>
                                <span class="font-bold px-4">DIRECCION:</span> <span class="text-gray-500 italic font-medium">{{$DIRECCION}}</span>
                            </button>
                            <button type="button"  class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                                <i class="fa-solid fa-code mr-4"></i>
                                <span class="font-bold px-4">CALIFICACION_ENERGETICA:</span>
                                <span class="text-gray-500 italic font-medium">{{ $CALIFICACION_ENERGETICA }}</span>
                            </button>
                            <button type="button"  class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                                <i class="fa-solid fa-code mr-4"></i>
                                <span class="font-bold px-4">CODIGO EDIFICIO:</span>
                                <span class="text-gray-500 italic font-medium">{{ $CODIGO_EDIFICIO }}</span>
                            </button>
                            
                            
                        </div>
                </div>
            </div>
            <div class="grid grid-cols-6 py-3 px-12">
                <div class="col-span-6 py-2 text-center">
                    <h4 class="text-xl my-2 w-full text-center font-black text-green-600">Continuar con la configuración</h4>
                    <hr class="max-w-xl h-1 mx-auto mt-4 bg-green-600 border-0 rounded  ">
                </div>
                <div class="col-span-2 py-2 mx-2">
                    <button
                            wire:click="showStep(1)"
                            class="relative block  w-full items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 "
                            > <i class="fa-solid fa-signature"></i> <br> Cambiar nombre edificio</button>
                </div>
                <div class="col-span-2 py-2  mx-2">
                    <button
                            wire:click="showStep(2)"
                            class="relative block  w-full items-center focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 "
                            ><i class="fa-solid fa-map-location-dot"></i> <br> Cambiar ubicación edificio</button>
                </div>
                <div class="col-span-2 py-2  mx-2">
                    <button type="button"
                    wire:click="showStep(7)"
                    class="relative block  w-full items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        <div class="text-center px-4">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <br>
                              <span class=""> Resumen edificio</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white min-h-screen overflow-hidden px-2 py-4  @if($currentStep!=7) hidden @endif">
        <div class="w-full py-12 mx-auto">
            <div class="max-w-8xl mx-auto grid grid-cols-3 py-2 ">
                <div class="col-span-1 ">
                    <div class="mt-6">
                        <img  src="{{URL::asset('img/logo3r.png')}}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 mb-2 py-1">
                    <h2 class="text-2xl font-extrabold ">Guardar el edificio</h2>
                    <p class="my-4 text-lg text-gray-500">Esta es la configuración del edificio que va a crear.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500 ">Considere que a partir de la creación del edificio podrá gestionar muchas opciones más.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500 ">Si la información básica es correcta, puede guardar el edificio para continuar con la creación del mismo.</p>
                    <hr class="max-w-xl h-1 mx-auto mt-4 bg-green-600 border-0 rounded md:my-10 ">
                </div>
            </div>
            <div class="p-12 mt-8 mb-3  max-w-8xl mx-auto border-2 border-gray-200 rounded-md">
                <h5 class="mb-4 text-xl font-extrabold  text-green-500">¿Qué podrás hacer en el edificio?</h5>
                <ol
                class="border-l border-gray-400 md:flex md:justify-center md:gap-6 md:border-l-0 md:border-t">
                <!--First item-->
                <li style="min-width:20%">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div class="-ml-[5px] h-[9px] w-[9px] rounded-full bg-gray-400 md:-mt-[5px] md:ml-0 md:mr-0" style="margin-top:-5px; margin-left: 12px;"></div>
                    <p class="mt-2 text-base text-gray-600">
                       Inventario de Edificios
                    </p>
                    </div>
                    <br>
                    <div class="flex flex-col  justify-between items-center ml-4 mt-5 pb-5 px-3 md:ml-0">
                       <h4 class="text-2xl text-center my-1"> <i class="fa-solid fa-building-circle-arrow-right"></i></h4>
                        <h4 class="mb-1.5 text-xl text-gray-700 font-semibold">AÑADIR EDIFICIOS</h4>
                    <p class="py-4 px-3 text-gray-600">
                        Añadir edificios al edificio y completar la información que define cada uno de ellos
                    </p>
                    </div>
                </li>

                <!--Second item-->
                <li style="min-width:20%">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] h-[9px] w-[9px] rounded-full bg-gray-400  md:-mt-[5px] md:ml-0 md:mr-0" style="margin-top:-5px;"></div>
                    <p class="mt-2 text-base text-gray-600">
                          Seguimiento y Gestión
                    </p>
                    </div>
                    <br>
                    <div class="flex flex-col  justify-between items-center ml-4 mt-5 pb-5 px-3 md:ml-0">
                        <h4 class="text-2xl text-center my-1"> <i class="fa-solid fa-house-circle-exclamation"></i></h4>
                    <h4 class="mb-1.5 text-xl text-gray-700 font-semibold">GESTIÓN DE EDIFICIOS</h4>
                    <p class="py-4 px-3 text-gray-400 italic leading-7">
                        Acceso a herramientas de gestión y seguimiento de los edificios y sus instalaciones
                     </p>
                    </div>
                </li>
                <li style="min-width:20%">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] h-[9px] w-[9px] rounded-full bg-gray-400  md:-mt-[5px] md:ml-0 md:mr-0" style="margin-top:-5px;"></div>
                    <p class="mt-2 text-base text-gray-600 text-lg">
                         Gestión de viviendas
                    </p>
                    </div>
                    <br>
                    <div class="flex flex-col  justify-between items-center ml-4 mt-5 pb-5 px-3 md:ml-0">
                        <h4 class="text-2xl text-center my-1"> <i class="fa-solid fa-house-user"></i></h4>
                    <h4 class="mb-1.5 text-xl text-gray-700 font-semibold">AÑADIR VIVIENDAS</h4>
                    <p class="py-4 px-3 text-gray-400 italic leading-7">
                        Ahondar en la gestión de aspectos relacionado con las viviendas y los usuarios para la gestión de recursos
                     </p>
                    </div>
                </li>

                <!--Third item-->
                <li style="min-width:20%">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div class="-ml-[5px] h-[9px] w-[9px] rounded-full bg-gray-400  md:-mt-[5px] md:ml-0 md:mr-0" style="margin-top:-5px;"></div>
                        <p class="mt-2 text-base text-gray-600">
                           Administración de edificios
                        </p>
                    </div>
                    <br>
                    <div class="flex flex-col  justify-between items-center ml-4 mt-5 pb-5 px-3 md:ml-0">
                    <h4 class="mb-1.5 text-xl text-gray-700 font-semibold">    <i class="fa-solid fa-user-tie"></i></h4>
                    <h4 class="mb-1.5 text-xl c font-semibold">GESTORES / USUARIOS</h4>
                    <p class="py-4 px-3 text-gray-400 italic leading-7">
                        Vincule los gestores o usuarios  relacionados con el edificio indicando su principales datos
                    </p>
                    </div>
                </li>
                </ol>
            </div>
            <div>
                @if(session()->has('error'))
                    <div class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg bg-red-100 text-red-800">
                        <i class="fa-solid fa-exclamation-circle mr-4"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif
            
                @if(session()->has('success'))
                    <div class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg bg-green-100 text-green-800">
                        <i class="fa-solid fa-check-circle mr-4"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
            </div>
            
            <div class="min-w-full grid grid-cols-6 px-6 py-1">
                <div class="mt-1 md:col-span-6 md:mt-0 bg-white shadow-md ">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-1 py-1 sm:p-6">
                            <div class="grid grid-cols-6">
                                <div class="col-span-3 text-center">
                                    <div class="flex justify-center items-center mb-4">
                                        <input id="checkform-checkbox" type="checkbox" wire:model="checkform" wire:click="comprobarForm" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                        <label for="checkform-checkbox" class="ms-2 text-medium font-medium text-gray-900">¿Quiere guardar el edificio?</label>
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <button type="button"
                                    wire:click="guardarEdificio"
                                    class="focus:outline-none w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg block px-5 py-2.5 me-2 mb-2 @if($checkform==false) opacity-50 hover:cursor-none @endif" @if($checkform==false) disabled @endif>
                                     Guardar edificio</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="absolute flex justify-center w-full bottom-0 text-center" wire:loading.flex >
            <div class="bg-blue-400 rounded-lg inline-block w-half p-6 mb-4 text-center text-white text-xl">
                <h2><i class="fa-solid fa-spinner fa-spin-pulse fa-spin-reverse"></i> CARGANDO</h2>
            </div>
        </div>
      </div>

</div>



</div>
