@extends('template')

@section('content')
    @livewire('create-edificios', ['proyectos' => $proyectos])
@endsection

