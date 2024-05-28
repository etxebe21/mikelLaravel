@extends('template')

@section('content')


<div class="max-w-7xl mx-auto bg-white bg-opacity-25 rounded-md " >
    <div class="grid grid-cols-4  ">
        <div class="col-span-1 flex justify-center">
                <x-application-logo class=" rounded-md " />
        </div>
        <div class="col-span-3">
            <h1 class="mt-6 text-center text-3xl font-bold text-green-800">
                Opciones de gestión
            </h1>
            <div class="mx-auto my-4 flex justify-center">
                <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
        </div>
            <p class="mt-6 text-gray-900  text-center italic font-bold  leading-relaxed">
               Aquí puede controlar los aspectos básicos de la administración de la plataforma
            </p>
        </div>
    </div>
</div>
<div class="grid grid-cols-8 md:grid-cols-8 gap-2 lg:gap-8 p-6 lg:p-8 " >
    <div class="col-span-2">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('lista-proyectos')}}">
                <div
                    class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('img/Proyecto.jpg')}}); background-size:cover; background-position:center"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5 class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                Proyectos
                </h5>
                <p class="my-4 text-base card-text  text-neutral-600 dark:text-neutral-200">
                   Crea un nuevo proyecto y configura todas las opciones
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <div class="flex">
                    <a
                    href="{{route('lista-proyectos')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Ver</a>

                    <a
                    href="{{route('crear-proyecto')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-2">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('lista-edificios')}}">
                <div
                    class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('img/edificio.jpg')}}); background-size:cover; background-position:center 90%"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5 class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                Edificios
                </h5>
                <p class="my-4 text-base card-text  text-neutral-600 dark:text-neutral-200">
                    Añadir y asignar un edificio a un proyecto ya existente
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <div class="flex">
                    <a
                    href="{{route('lista-edificios')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Ver</a>

                    <a
                    href="{{route('crear-edificio')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Crear</a>
                </div>
            </div>
            </div>
    </div>
    <div class="col-span-2">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('lista-viviendas')}}">
                <div
                    class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('img/casa.jpg')}}); background-size:cover; background-position:center"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5 class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                   Viviendas
                </h5>
                <p class="my-4 text-base card-text  text-neutral-600 dark:text-neutral-200">
                    Asignar una vivienda a un edificio ya existente
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <div class="flex">
                    <a
                    href="{{route('lista-viviendas')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Ver</a>

                    <a
                    href="{{route('crear-vivienda')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Crear</a>
                </div>
            </div>
            </div>
    </div>
    <div class="col-span-2">
        <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('lista-usuarios')}}">
                <div
                    class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('img/user.jpg')}}); background-size:cover; background-position:center"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5
                class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                Usuarios
                </h5>
                <p class="my-4 text-base card-text card-text  text-neutral-600 dark:text-neutral-200">
                Crear y gestionar usuarios para gestión de proyectos y edificios
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <div class="flex">
                    <a
                    href="{{route('lista-usuarios')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Ver</a>

                    <a
                    href="{{route('crear-usuario')}}"
                    class="inline-block w-full rounded mx-2 text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">Crear</a>
                </div>
            </div>
            </div>
    </div>

    {{-- <div class="col-span-2">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('examples')}}">
                <div class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('assets/images/card-bg/work-4.jpg')}}); background-size:cover; background-position:center"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5 class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                Indicadores
                </h5>
                <p class="my-4 text-base card-text  text-neutral-600 dark:text-neutral-200">
                    Crear indicadores para su posterior uso en los examples/edificios
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <a
                    href="{{route('examples')}}"
                    class="inline-block w-full rounded text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Gestionar
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-2">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('examples')}}">
                <div
                    class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('assets/images/card-bg/work-5.jpg')}}); background-size:cover; background-position:center"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5
                class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                Mejoras

                </h5>
                <p class="my-4 text-base card-text  text-neutral-600 dark:text-neutral-200">
                   Crear nuevas mejoras aplicables a edificios o viviendas
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <a
                    href="{{route('examples')}}"
                    class="inline-block w-full rounded text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Gestionar
                </a>
            </div>
            </div>
    </div>
    <div class="col-span-2">
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="{{route('examples')}}">
                <div
                    class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                    style="background-image: url({{URL::asset('assets/images/card-bg/encuesta_vivenda.jpg')}}); background-size:cover; background-position:center 90%"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </div>
            </a>
            <div class="p-6">
                <h5
                class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                Encuestas / Formularios

                </h5>
                <p class="my-4 text-base card-text  text-neutral-600 dark:text-neutral-200">
                   Gestión de encuestas y formularios asociados a la plataforma
                </p>
                <div class="mx-auto my-5 flex justify-center">
                    <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                </div>
                <a
                    href="{{route('examples')}}"
                    class="inline-block w-full rounded text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Gestionar
                </a>
            </div>
            </div>
    </div>
    
        <div class="col-span-2">
            <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <a href="https://plataforma3r.com/formacion/" target="_blank">
                    <div
                        class="relative overflow-hidden overflow-y-hidden bg-cover bg-no-repeat min-h-[150px] max-h-[150px]"
                        style="background-image: url({{URL::asset('assets/images/card-bg/formacion.webp')}}); background-size:cover; background-position:center"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                    </div>
                </a>
                <div class="p-6">
                    <h5
                    class="mb-2 text-2xl text-center font-bold leading-tight text-neutral-800  dark:text-neutral-50">
                    Formación

                    </h5>
                    <p class="my-4 text-base card-text  text-neutral-600  dark:text-neutral-200">
                        Adquiere los conocimientos para gestionar 

                    </p>
                    <div class="mx-auto my-5 flex justify-center">
                            <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
                            <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
                            <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
                    </div>
                    <a href="https://plataforma3r.com/formacion/" target="_blank"
                        class="inline-block w-full rounded text-center bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Acceder
                    </a>
                </div>
            </div>
        </div>
</div>
<div class="mt-16 mb-16">
</div> --}}
@endsection



<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById("userDropdown");
        dropdownMenu.classList.toggle("hidden");
    }

    // Cerrar el menú cuando se hace clic en cualquier lugar fuera del menú
    window.onclick = function(event) {
        var dropdownMenu = document.getElementById("userDropdown");
        if (dropdownMenu.classList.contains("hidden") === false && !event.target.matches('.dropdown-toggle')) {
            dropdownMenu.classList.add("hidden");
        }
    }
</script>
