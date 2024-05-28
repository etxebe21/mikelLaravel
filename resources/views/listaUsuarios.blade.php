@extends('template')

@section('content')
    
    <div class="py-1 z-0 " style="background-image:url('{{URL::asset("img/7.png")}}'); background-size:cover; background-position:center">
        
        <div class="min-w-full min-h-screen grid grid-cols-6 bg-white bg-opacity-25 mx-auto sm:px-6 lg:px-8 ">
            <div class="overflow-hidden col-span-6 col-start-1 p-2">
                @isset($ID_PROYECTO)
                    @component('components.lista-usuarios', ['usuarios'=>$usuarios])
                    @endcomponent
                @else
                    @component('components.lista-usuarios', ['usuarios'=>$usuarios])
                    @endcomponent
                 @endisset
            </div>

        </div>
    </div>
    @if((Auth::user()->tipo_usuario==null)){
        @if(isset($ID_PROYECTO))
            @component('components.menu-inferior', ['web'=>Route::currentRouteName(), 'ID_PROYECTO'=>$ID_PROYECTO ])
            @endcomponent
        @elseif(isset($ID_EDIFICIO))
            @component('components.menu-inferior', ['web'=>Route::currentRouteName(), 'ID_EDIFICIO'=>$ID_EDIFICIO ])
            @endcomponent
        @else
            @component('components.menu-inferior', ['web'=>Route::currentRouteName() ])
            @endcomponent
        @endif
    }@endif
    @endsection
