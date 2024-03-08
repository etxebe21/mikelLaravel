@extends('template')

@section('content')
<x-nav class="mb-4">
        <x-nav.link href="#">Cursos</x-nav.link>
        <x-nav.link href="#">Planes</x-nav.link>
        <x-nav.link href="#">Documentos</x-nav.link>
</x-nav>

<div class="container mx-auto px-4">
    <h1 class="text-3xl">Listado de ejemplos</h1>

    <hr class="my-4">

    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error"> Mensaje de ERROR</x-flash>
    <x-flash type="info"> Mensaje de INFO</x-flash>
    <x-flash type="warning"> Mensaje de ADVERTENCNIA</x-flash>

    <hr class="my-4">
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        <x-card
            img="https://images.unsplash.com/photo-1623479322729-28b25c16b011"
            date="Septiembre, 2015"
            title="TITULO"
            content="TITULO"
        ></x-card>
        <x-card
            img="https://plus.unsplash.com/premium_photo-1661713438592-42a763d67cd6"            
            date="Septiembre, 2015"
            title="TITULO"
            content="TITULO"
        ></x-card>
        <x-card
            img="https://images.unsplash.com/photo-1629904853716-f0bc54eea481"
            date="Septiembre, 2015"
            title="TITULO"
            content="TITULO que tiene esta tarjeta para comprobar si la card mantiene su tamaño"
        ></x-card>
    </div>

    <div>
    <hr class="my-4">
    <x-youtube url="https://www.youtube.com/embed/thCwKk3nyJE?si=C0kfnZnbw2zJHNG7"></x-youtube>

    <hr class="my-4">
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            <x-youtube url="https://www.youtube.com/embed/thCwKk3nyJE?si=C0kfnZnbw2zJHNG7"></x-youtube>
            <x-youtube url="https://www.youtube.com/embed/thCwKk3nyJE?si=C0kfnZnbw2zJHNG7"></x-youtube>
            <x-youtube url="https://www.youtube.com/embed/thCwKk3nyJE?si=C0kfnZnbw2zJHNG7"></x-youtube>
            <x-youtube url="https://www.youtube.com/embed/thCwKk3nyJE?si=C0kfnZnbw2zJHNG7"></x-youtube>
        </div>
    </div>
</div>
@endsection