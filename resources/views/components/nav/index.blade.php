<nav {{  
    $attributes->merge([
        'class' => 'py-4 px-6 bg-while flex flex-col sm:flex-row text-center sm:text-left sm:justify-between shadow w-full gap-4 items-center'
    ])
}}>

<a href="/home" class="text-2xl font-bold text-green-700 hover:text-green-900 flex items-center">
    <img src="{{ URL::asset('img/logo1.png') }}" alt="Icono de inicio" class="w-16 h-10 mr-2">
    Home
</a>


    <ul class="flex gap-2 flex-col sm:flex-row">
        {{ $slot }}
    </ul>

</nav>