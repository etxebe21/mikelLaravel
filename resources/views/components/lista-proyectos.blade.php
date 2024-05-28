
<div class="bg-white rounded shadow-xl p-6 lg:p-8">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        LISTA DE PROYECTOS
    </h2>
    <table class="min-w-full uppercase text-left text-sm font-light">
        <thead class="border-b font-medium dark:border-neutral-500">
            <tr class="border-b border-green-200 bg-plat-green text-orange-600">
                <th scope="col" class="px-6 py-4 text-xl">NOMBRE</th>
                <th scope="col" class="px-6 py-4 text-xl">CODIGO</th>
                <th scope="col" class="px-6 py-4 text-xl">DIRECCION</th>
                <th scope="col" class="px-6 py-4 text-xl">POBLACION</th>

                <th scope="col" class="px-6 py-4 text-xl text-right">
                   {{--  @if(Auth::user()->tipo_usuario==1)
                    <a href="{{route('proyecto.import')}}" type="button" class="text-green-700 border border-green-700 hover:bg-green-700 hover:text-white focus:ring-4 focus:outline-none font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center ">
                        <i class="fa-solid fa-download"></i>
                        <span class="sr-only">Icon description</span>
                    </a>
                    @endif --}}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto )
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$proyecto->NOMBRE_PROYECTO}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$proyecto->CODIGO_PROYECTO}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$proyecto->DIRECCION}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{$proyecto->POBLACION}}</td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{-- <a
                            href="{{route('proyecto.show', $proyecto->ID_PROYECTO)}}"
                            class="inline-block w-full rounded text-center bg-plat-green px-6 pb-2 pt-2.5 font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-700  hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-700  focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700  active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            > <i class="fa-solid fa-circle-info text-2xl"></i></a> --}}

                        </td>

                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
