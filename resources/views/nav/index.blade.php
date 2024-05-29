<nav {{  
    $attributes->merge([
        'class' => 'py-4 px-6 bg-white flex flex-col sm:flex-row text-center sm:text-left sm:justify-between shadow w-full gap-4 items-center'
    ])
}}>
<a href="/home" class="text-2xl text-gray-600 hover:text-gray-900 flex items-center">
    <img src="{{ URL::asset('img/logo1.jpg') }}" alt="Icono de inicio" class="w-6 h-6 mr-2">
    Home
</a>

    
    <ul class="flex gap-2 flex-col sm:flex-row">
        {{ $slot }}
    </ul>
</nav>
