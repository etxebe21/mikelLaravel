<div>
    <div class="bg-white min-h-screen overflow-hidden px-2 py-4 @if($currentStep != 0) hidden @endif">
        <div class="w-full flex py-12 mx-auto">
            <div class="max-w-8xl mx-auto grid grid-cols-3 py-4">
                <div class="col-span-1">
                    <div class="mt-6">
                        <img src="{{ URL::asset('img/logo1.png') }}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 px-6 pt-4">
                    <h1 class="mt-6 text-center text-3xl font-medium text-gray-900">
                        Va a crear un nuevo usuario 
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
                        <img src="{{ URL::asset('img/logo1.png') }}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2  py-4">
                    <h2 class="text-2xl font-extrabold">Creación de usuario</h2>
                    <p class="my-4 text-lg text-gray-500">A continuación configurará un usuario con su nombre y email.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500">Después establecerá la contraseña y tipo de usuario.</p>
                </div>
                <div class="col-span-3 mt-2 py-2">
                    <hr class="max-w-xl h-1 mx-auto my-4 bg-green-600 border-0 rounded">
                    <div class="grid grid-cols-6 pt-6">
                        <div class="col-span-4 col-start-2">
                            <div class="my-6 px-12 mx-auto">   
                                <div class="my-6 px-12 mx-auto">
                                    <label for="name" class="block mb-2 text-lg font-medium text-gray-900">Introduzca el nombre del usuario</label>
                                    <div class="inline-flex mx-auto w-full rounded-md shadow-sm mb-6">
                                        <input type="text" id="name" name="name" wire:model="name"  class="block w-full p-4 text-gray-900 border border-gray-300 rounded-e-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    <label for="email" class="block mb-2 text-lg font-medium text-gray-900">Introduzca el email del usuario</label>
                                    <div class="inline-flex mx-auto w-full rounded-md shadow-sm">
                                        <input type="text" id="email" name="email" wire:model="email" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-e-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="my-6 px-12 mx-auto text-center justify-center py-6">
                                <div class="inline-flex mx-auto rounded-md shadow-sm mt-4" role="group">
                                    <button wire:click="nextStep" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center inline-flex items-center">
                                        CONTINUAR
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

                <div class="mt-1 min-w-full md:mt-0 bg-white p-4 grid grid-cols-4">
                    <div class="col-span-1 ">
                        <img  src="{{URL::asset('img/logo1.png')}}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                    <div class="col-span-3">
                        <h2 class="text-2xl font-extrabold">Creación de usuario</h2>
                        <p class="my-4 text-lg text-gray-500">A continuación configurará la contraseña y tipo de usuario.</p>
                    </div>
                </div>

                <div class="py-2">
                    <hr class="max-w-xl h-1 mx-auto bg-green-600 border-0 rounded md:my-8 ">
                    <div class=" max-w-xl my-6 px-12 mx-auto">   
                        <div class="my-6 px-12 mx-auto">
                            <label for="name" class="block mb-2 text-lg font-medium text-gray-900">Seleccione el tipo de usuario</label>
                            <select name="tipo_usuario" id="tipo_usuario" wire:model="tipo_usuario" class="my-5 block w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                                <option value="{{$tipo_usuario}}"></option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
                        </div>
                        <div class="my-6 px-12 mx-auto">
                            <label for="name" class="block mb-2 text-lg font-medium text-gray-900">Introduzca contraseña</label>
                            <div class="mt-4">
                                <x-label>Password</x-label>            
                                <x-input id="password" wire:model="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="mt-4">
                                <x-label>Confirmar Contraseña</x-label>            
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
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


    <div class="min-h-screen bg-white overflow-hidden px-2 py-4  @if($currentStep!=3) hidden @endif">
        <div class="w-full py-12 mx-auto">
            <div class="max-w-8xl mx-auto grid grid-cols-3 py-2 ">
                <div class="col-span-1 ">
                    <div class="mt-6">
                        <img  src="{{URL::asset('img/logo1.png')}}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 mb-2 py-2">
                    <h2 class="text-2xl font-extrabold ">Configuración inicial del usuario</h2>
                    <p class="my-4 text-lg text-gray-500">A continuación comprobará si la creación del usuario es la adecuada.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500 ">Si es correcto, puede guardarlo para continuar con la configuración del mismo.</p>
                    <hr class="max-w-xl h-1 mx-auto mt-4 bg-green-600 border-0 rounded md:my-10 ">
                </div>
            </div>
            <div class="min-w-full grid grid-cols-6 py-2 px-6">
                <div class="col-span-3 py-2 px-6">
                    <div class="w-full text-gray-900 bg-white border border-gray-200 rounded-lg" >
                        <button type="button" class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                            <i class="fa-solid fa-city mr-4"></i>
                            <span class="font-bold px-4">NOMBRE :</span> <span class="text-gray-500 italic font-medium">{{$name}}</span>
                        </button>
                        <button type="button" class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                            <i class="fa-solid fa-city mr-4"></i>
                            <span class="font-bold px-4">EMAIL:</span> <span class="text-gray-500 italic font-medium">{{$email}}</span>
                        </button>
                        <button type="button"  class="relative inline-flex items-center w-full px-4 py-4 text-lg font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                            <i class="fa-solid fa-code mr-4"></i>
                            <span class="font-bold px-4">TIPO DE USUARIO:</span>
                            <span class="text-gray-500 italic font-medium">{{ $tipo_usuario }}</span>
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
                            > <i class="fa-solid fa-signature"></i> <br> Cambiar nombre o email del nuevo usuario</button>
                </div>
                <div class="col-span-2 py-2  mx-2">
                    <button
                            wire:click="showStep(2)"
                            class="relative block  w-full items-center focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 "
                            ><i class="fa-solid fa-map-location-dot"></i> <br> Cambiar tipo de usuario o contraseña </button>
                </div>
                <div class="col-span-2 py-2  mx-2">
                    <button type="button"
                    wire:click="showStep(7)"
                    class="relative block  w-full items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        <div class="text-center px-4">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <br>
                              <span class=""> Resumen usuario</span>
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
                        <img  src="{{URL::asset('img/logo1.png')}}" class="block h-24 mx-auto w-auto" alt="">
                    </div>
                </div>
                <div class="col-span-2 mb-2 py-1">
                    <h2 class="text-2xl font-extrabold ">Guardar nuevo usuario</h2>
                    <p class="my-4 text-lg text-gray-500">Esta es la configuración del usuario que va a crear.</p>
                    <p class="mb-4 text-lg font-normal text-gray-500 ">Si la información básica es correcta, puede guardarlo.</p>
                    <hr class="max-w-xl h-1 mx-auto mt-4 bg-green-600 border-0 rounded md:my-10 ">
                </div>
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
                                <div class="col-span-1">
                                    <button type="button"
                                    wire:click="showStep(3)"
                                    class="focus:outline-none w-full text-white bg-orange-600 hover:bg-orange-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg block px-5 py-2.5 me-2 mb-2 @if($checkform==false) opacity-50 hover:cursor-none @endif" @if($checkform==false) disabled @endif>
                                     Volver</button>

                                </div>
                                <div class="col-span-2 text-center">
                                    <div class="flex justify-center items-center mb-4">
                                        <input id="checkform-checkbox" type="checkbox" wire:model="checkform" wire:click="comprobarForm" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                        <label for="checkform-checkbox" class="ms-2 text-medium font-medium text-gray-900">¿Quiere guardar el edificio?</label>
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <button type="button"
                                    wire:click="guardarUsuario"
                                    class="focus:outline-none w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg block px-5 py-2.5 me-2 mb-2 @if($checkform==false) opacity-50 hover:cursor-none @endif" @if($checkform==false) disabled @endif>
                                     Guardar usuario</button>

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

