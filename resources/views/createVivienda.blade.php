@extends('template')

@section('content')
    @livewire('create-viviendas', ['edificios' => $edificios])
@endsection

