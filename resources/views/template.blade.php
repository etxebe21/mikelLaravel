<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Welcome!'))</title>
        
        <!-- Tailwind CSS and Alpine.js -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap');
        </style>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/LineIcons.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.jqueryui.min.css" integrity="sha512-x2AeaPQ8YOMtmWeicVYULhggwMf73vuodGL7GwzRyrPDjOUSABKU7Rw9c3WNFRua9/BvX/ED1IK3VTSsISF6TQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.uikit.min.css" integrity="sha512-v1si6kCoH7ODQMp4X4TZXOZzDTrhKhWRdd50pRuejFJMSYKrLoW68NQmmTJWjgs1B0VRYaE6oB1CDq6r5r306A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ URL::asset('assets/css/custom-app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/11.4.1/highcharts.js" integrity="sha512-ArU7y30FePOAB8xSre+rJGsiBfYkuAcNMIqXexRAbyloOfeRN8dlQwMfJk59olB1Rz3ouSZ2k4knrnOMCbS0ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.jqueryui.min.js" integrity="sha512-9u6nki9uD72SzBtp/+7VmFplkUljohfLv2ogiMc1N4EwPAs7jG/3SBM6abgTJAxZdCjF5F9sg5Iis/uriTm1mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.material.min.js" integrity="sha512-QlmLkAfo4B1hJMd6K0Z0lFlZbgTrPGKsWp2vi5gDSrKMeDZfYPM02ovNcvs5k/2S84gH1F0VCDCPsSg/p4RX1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.uikit.min.js" integrity="sha512-bAcEEaYbeDReL5E0ASR5zPLMAd0TX5IVMy75g0QFbOr1Qq0FLl3d8bcM6M7CxEB+N97co3o0AlzqEcacUktvTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        {{-- @livewireStyles --}}
    </head>
    <body class="font-sans antialiased">
       
        <x-nav class="mb-4 w-full">
            <x-nav.link href="#">Cursos</x-nav.link>
            <x-nav.link href="#">Planes</x-nav.link>
            <x-nav.link href="#">Documentos</x-nav.link>
            <div class="dropdown">
                <span onclick="toggleDropdown()" class="dropdown-toggle">
                    @if(auth()->check())
                        {{ auth()->user()->email }}
                    @else
                        Guest
                    @endif
                </span>
                <div id="userDropdown" class="dropdown-menu hidden">
                    @if(auth()->check())
                        <a href="#">Ir al perfil</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Cerrar sesión</button>
                        </form>
                    @else
                        <a href="/login">Iniciar sesión</a>
                        <a href="/register">Registrarse</a>
                    @endif
                </div>
            </div>
        </x-nav>

        <div class="min-h-screen bg-gray-100">
           
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
        <x-footer></x-footer>

        @stack('modals')

        @livewireScripts
        <script>
            var tableLang = {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "decimal": ".",
                "thousands": ",",
                "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            };
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": tableLang
                });
            });
        </script>
    </body>
</html>
