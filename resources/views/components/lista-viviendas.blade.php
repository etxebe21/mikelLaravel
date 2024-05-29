
<div class="max-w-7xl mx-auto bg-white bg-opacity-25 rounded-md mb-6" >
    <div class="grid grid-cols-4  ">
        <div class="col-span-1 flex justify-center">
                <x-application-logo class=" rounded-md " />
        </div>
        <div class="col-span-3">
            <h1 class="mt-6 text-center text-3xl font-bold text-green-800">
                LISTA DE VIVIENDAS            </h1>
            <div class="mx-auto my-4 flex justify-center">   
            </div>
            <p class="mt-6 text-gray-900  text-center italic font-bold  leading-relaxed">
               Aquí puede ver las viviendas vinculadas a la plataforma
            </p>
        </div>
    </div>
</div>
<div class="bg-white rounded shadow-xl p-6 lg:p-8">
    @if(count($viviendas)!=0)
    <table class="min-w-full uppercase text-left text-sm font-light">
      <thead class="border-b font-medium dark:border-neutral-500">
          <tr class="border-b border-green-200 bg-plat-green text-green-700">
             
              <th scope="col" class="px-2 py-4 text-lg">ID_EDIFICIO</th>
              <th scope="col" class="px-2 py-4 text-lg">PISO</th>
              <th scope="col" class="px-2 py-4 text-lg">CODIGO VIVIENDA</th>
              <th scope="col" class="px-2 py-4 text-lg"></th>
          </tr>
      </thead>
      <tbody>
          @foreach ($viviendas as $key=>$vivienda )
          <tr class="border-b dark:border-neutral-500">
                  <td class="whitespace-nowrap px-2 py-1 font-medium hidden">{{$vivienda->ID_VIVIENDA}}</td>
                      {{-- @if(isset($ID_PROYECTO))
                          <td>
                              <a href="{{route('edificio.info', $vivienda->ID_EDIFICIO)}}"
                              class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                              @if($vivienda->DIRECCION==null)
                                   {{$vivienda->CODIGO_EDIFICIO}}
                              @else
                                    {{$vivienda->DIRECCION}}
                              @endif
                          </a>
                          </td>
                      @elseif(isset($ID_EDIFICIO))
                          <td class="px-2 py-1">
                              {{$direccion}}
                          </td>
                      @else --}}
                          <td class="px-2 py-1">
                              {{-- @if($vivienda->DIRECCION==null) --}}
                              {{$vivienda->ID_EDIFICIO}}
                              {{-- @else
                              {{$vivienda->DIRECCION}}
                              @endif --}}
                          </td>
                      {{-- @endif --}}
                  <td class="px-2 py-1 text-base">{{$vivienda->PISO}}</td>
                  <td class="px-2 py-1 text-base">{{$vivienda->CODIGO_VIVIENDA}}</td>
                  <td class="whitespace-nowrap px-2 py-4 text-right"> 
                    <button id="dropdownInformationButton_{{$key}}" data-dropdown-toggle="dropdownInformation_{{$key}}"
                    class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xl px-5 py-3 text-center inline-flex items-center " type="button">
                        <i class="fa-solid fa-gear"></i>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                    </button>
                        <!-- Dropdown menu -->
                    <div id="dropdownInformation_{{$key}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-96 ">
                        <div class="px-4 py-3 text-md bg-plat-green text-black ">
                            <div>OPCIONES</div>
                            <div class="font-medium text-xs truncate">{{$vivienda->CODIGO_VIVIENDA}}</div>
                        </div>
                        <ul class="text-lg text-white font-medium" aria-labelledby="dropdownInformationButton">
                            <li class="border-b border-green-500">
                                <a href="javascript:void(0);" onclick="eliminarVivienda({{ $vivienda->ID_VIVIENDA }})"
                                    class="block px-4 py-3 text-gray-700 hover:bg-red-600 hover:text-white">
                                    <i class="fa-solid fa-trash mr-2"></i> ELIMINAR
                                </a>
                            </li>
                              
                            <li  class="border-b border-green-500">
                                 <a href="{{route('home')}}"
                                    class="opacity-50 pointer-events-none block px-4 py-3 text-gray-700 hover:bg-green-600 hover:text-white">
                                    <i class="fa-solid fa-chart-simple  text-2xl"></i> MONITORIZACION 
                                </a> 
                            </li>
                        </ul>

                    </div>
            </td> 
              </tr>
          @endforeach
      </tbody>
    </table>
    @else
      <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">

          </thead>
          <tbody>
      <tr>
          <td colspan="2" class="px-2 py-1 text-xl italic">
              <h5>No hay viviendas en este edificio</h5>
          </td>
      </tr>
      </tbody>
  </table>
    @endif

</div>


<script>
    function eliminarVivienda(idVivienda) {
        if (confirm("¿Estás seguro de que deseas eliminar esta vivienda?")) {
            window.location.href = "/eliminar-vivienda/" + idVivienda;
        }
    }
</script>