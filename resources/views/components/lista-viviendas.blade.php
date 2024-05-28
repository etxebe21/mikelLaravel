
<div class="bg-white rounded shadow-xl p-6 lg:p-8">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        LISTA DE VIVIENDAS
    </h2>
    @if(count($viviendas)!=0)
    <table class="min-w-full uppercase text-left text-sm font-light">
      <thead class="border-b font-medium dark:border-neutral-500">
          <tr class="border-b border-green-200 bg-plat-green text-orange-600">
             
              <th scope="col" class="px-2 py-4 text-lg">DIRECCION</th>
              <th scope="col" class="px-2 py-4 text-lg">PISO</th>
              <th scope="col" class="px-2 py-4 text-lg">CODIGO VIVIENDA</th>
              <th scope="col" class="px-2 py-4 text-lg"></th>
          </tr>
      </thead>
      <tbody>
          @foreach ($viviendas as $key=>$vivienda )
          <tr class="border-b dark:border-neutral-500">
                  <td class="whitespace-nowrap px-2 py-1 font-medium hidden">#{{$vivienda->ID_VIVIENDA}}</td>
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
                              {{$vivienda->CODIGO_VIVIENDA}}
                              {{-- @else
                              {{$vivienda->DIRECCION}}
                              @endif --}}
                          </td>
                      {{-- @endif --}}
                  <td class="px-2 py-1 text-base">{{$vivienda->PISO}}</td>
                  <td class="px-2 py-1 text-base">{{$vivienda->CODIGO_VIVIENDA}}</td>
                  {{-- <td class="px-2 py-1">
                      <div class="inline-flex w-full rounded-md shadow-sm" role="group">
                          <a href="{{route('vivienda.inquilino', $vivienda->ID_VIVIENDA)}}"
                              class="flex flex-col w-full text-center  px-4 py-2.5 text-base font-medium text-white bg-blue-500 border border-white rounded-s-lg hover:bg-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700  ">
                              <i class="fa-solid fa-user"></i> Usuario
                          </a>
                          <a href="{{route('vivienda.medidores', $vivienda->ID_VIVIENDA)}}" class="@if($vivienda->MONITORIZADA==0) opacity-50 pointer-events-none @endif flex flex-col w-full text-center  px-4 py-2.5 text-base font-medium text-white bg-green-500 border-t border-b border-gray-200  hover:bg-green-700 focus:z-10 focus:ring-2  ">
                              <i class="fa-solid fa-chart-simple"></i> Medidores
                          </a>
                          <button id="dropdownDefaultButton_{{$key}}"  data-dropdown-toggle="dropdown_{{$key}}" class="inline-flex uppercase items-center justify-center w-full text-center  px-2 py-2 text-base font-medium text-white bg-orange-400 border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2  " type="button">
                              <div class="flex flex-col ">
                                  <i class="fa-solid fa-gears"></i> Opciones
                              </div>
                              <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                              </button>

                              <!-- Dropdown menu -->
                              <div id="dropdown_{{$key}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-96">
                                  <ul class="py-2 text-base text-gray-700" >
                                      <li>
                                          <a href="{{route('documentacion.gestor', ['type'=>'vivienda', 'id'=>$vivienda->ID_VIVIENDA])}}" class="flex items-center  px-4 py-2.5  py-2 hover:bg-green-600 hover:text-white "><i class="fa-solid fa-folder mr-2"></i> Documentos</a>
                                      </li>
                                      <li>
                                          <a href="#" class="@if($vivienda->MONITORIZADA==0) opacity-50 pointer-events-none @endif flex items-center  px-4 py-2.5  py-2 hover:bg-green-600 hover:text-white"><i class="fa-solid fa-chart-line mr-2"></i> Monitorización</a>
                                      </li>
                                      <li>
                                          <a href="{{route('encuestas.tipo', ['vivienda', $vivienda->ID_VIVIENDA])}}" class="flex items-center  px-4 py-2.5  py-2 hover:bg-green-600 hover:text-white"><i class="fa-solid fa-square-poll-horizontal mr-2"></i> Encuesta</a>
                                      </li>
                                      <li>
                                          <a href="{{route('vivienda.mejora', [$vivienda->ID_VIVIENDA])}}" class="flex items-center  px-4 py-2.5  py-2 hover:bg-green-600 hover:text-white"><i class="fa-solid fa-star mr-2"></i> Mejoras</a>
                                      </li>
                                  </ul>
                              </div>

                      </div>
                  </td> --}}
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
