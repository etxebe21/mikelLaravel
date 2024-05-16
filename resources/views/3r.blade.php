<div class="w-full grid grid-cols-6 py-12 mx-auto bg-green-600 rounded-md">
    <div class="col-span-2 p-2 text-center">
        <button
        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2 "
        wire:click="showStep(0)"
        >Volver</button>
    </div>
    <div class="col-span-3 p-2">
        <h5 class="text-2xl text-center my-2 font-bold text-white">Gestionar perfil del usuario</h5>
    </div>
</div>
<div class="w-full grid grid-cols-6 gap-6 py-2 mx-auto">
    
        
            <div class="col-span-3 p-6 shadow-md rounded-md">
                <h5 class="text-xl my-4 text-center uppercase font-bold undeline">FICHA GESTOR</h5>
                <div class="max-w-2xl mx-auto mb-5 px-12">
                    <div class="mb-5">
                        <label for="EMAIL" class="block mb-2 text-sm font-medium text-gray-900">Correo electrónico</label>
                        <input type="email" id="EMAIL" name="EMAIL" wire:model="profile.EMAIL" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="mb-5">
                        <label for="NOMBRE" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" id="NOMBRE" name="NOMBRE" wire:model="profile.NOMBRE" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="mb-5">
                        <label for="DIRECCION" class="block mb-2 text-sm font-medium text-gray-900">Dirección</label>
                        <input type="text" id="DIRECCION" name="DIRECCION" wire:model="profile.DIRECCION" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="mb-5">
                        <label for="TELEFONO" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                        <input type="tel" id="TELEFONO" name="TELEFONO" wire:model="profile.TELEFONO"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex pt-4 w-full justify-between">
                        <div class="flex items-center h-5">
                            <input id="checkficha" name="checkficha" wire:model="checkficha" type="checkbox" wire:click="checkFormFicha"  class="w-6 h-6 border border-gray-500 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                            <label for="checkficha" class="ms-2 text-sm font-medium text-gray-900 ">Checkear antes de guardar los cambios</label>
                        </div>

                        <div>
                            <button
                            wire:click="guardarFichaUsuario"
                            class= " opacity-50 pointer-events-none  focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2"
                            >Guardar Cambios</button>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-2 border-green-600 max-w-md mx-auto">

            </div>
        
        <div class="col-span-3 p-6 shadow-md rounded-md">
            <h5 class="text-xl my-4 text-center uppercase font-bold undeline">FICHA INQUILINO</h5>
                <div class="max-w-2xl mx-auto mb-5 px-12 ">
                    <div class="mb-5">
                        <label for="EMAIL" class="block mb-2 text-sm font-medium text-gray-900">Correo electrónico</label>
                        <input type="email" id="EMAIL" name="EMAIL" wire:model="profile.EMAIL" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="mb-5">
                        <label for="NOMBRE" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" id="NOMBRE" name="NOMBRE" wire:model="profile.NOMBRE" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="mb-5">
                        <label for="TELEFONO" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                        <input type="tel" id="TELEFONO" name="TELEFONO" wire:model="profile.TELEFONO"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="mb-5">
                        
                            <div class="p-4 text-center text-lg">
                                <i class="fa-solid fa-circle-check text-xl text-green-600 mr-4"></i>Tiene asignado un DNI.
                                <button type="button" wire:click="changeDNI" class="text-white bg-orange-600 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 ">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    <span class="sr-only">Editar</span>
                                </button>
                            </div>

                         
                             <label for="DNI" class="block mb-2 text-sm font-medium text-gray-900">DNI</label>
                             <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-white bg-red-600 border border-e-0 border-gray-300 rounded-s-md hover:bg-red-800 hover:cursor-pointer" wire:click="changeDNI">
                                    <i class="fa-solid fa-rotate-left text-xl"></i>
                                  </span>
                                  <input type="tel" id="DNI" name="DNI" wire:model="newDNI" wire:change="changingDNI" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-base  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                                  <button wire:click="verifyDNI" class="inline-flex items-center px-3 text-gray-900 bg-gray-200  text-white bg-green-600 border border-e-0 border-gray-300 rounded-r ">
                                    
                                    <i class="fa-solid fa-magnifying-glass text-xl"></i>
                                    
                                    <i class="fa-solid fa-check text-xl"></i>
                                    
                                </button>
                            </div>

                           
                    </div>
                    <div class="mb-5">
                        <label for="CUPS" class="block mb-2 text-sm font-medium text-gray-900">Nº de CUPS</label>
                        <input type="text" id="CUPS" name="CUPS" wire:model="profile.CUPS" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex pt-4 w-full justify-between">
                        <div class="flex items-center h-5">
                            <input id="checkficha" name="checkficha" wire:model="checkficha" type="checkbox" wire:click="checkFormFicha"  class="w-6 h-6 border border-gray-500 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                            <label for="checkficha" class="ms-2 text-sm font-medium text-gray-900 ">Checkear antes de guardar los cambios</label>
                        </div>
                        <div>
                            <button
                            wire:click="guardarFichaUsuario"
                            class=" opacity-50 pointer-events-none  focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2"
                            >Guardar Cambios</button>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-2 border-green-600 max-w-md mx-auto">
        </div>
        
        <div class="col-span-3  shadow-md rounded-md">
            <div class="w-full p-6">
                <h5 class="text-xl my-4 text-center uppercase font-bold undeline">CAMBIAR CONTRASEÑA</h5>
                <div class="max-w-2xl mx-auto ">
                    <div class="mb-5">
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                            <input type="password" id="password" wire:model="password.PASSWORD" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                        </div>
                        <div class="mb-5">
                            <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Repeat password</label>
                            <input type="password" id="repeat-password" wire:model="password.REPEAT" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                        </div>
                        <div class="flex pt-4 w-full justify-between">
                            <div class="flex items-center h-5">
                                <input id="checkpassword" name="checkpassword" wire:model="checkpassword" type="checkbox" wire:click="checkFormPassword"  class="w-6 h-6 border border-gray-500 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                                <label for="checkpassword" class="ms-2 text-sm font-medium text-gray-900 ">Checkear antes de guardar los cambios</label>
                            </div>
                            <div>
                                <button
                                wire:click="cambiarPassword"
                                class=" opacity-50 pointer-events-none  focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2"
                                >Guardar Cambios</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <hr class="my-6 border-2 border-green-600 max-w-md mx-auto">
        <div class="w-full p-6">
            <div class="max-w-2xl mx-auto ">
                <h5 class="text-xl my-4 text-center uppercase font-bold undeline">CAMBIAR TIPO DE USUARIO</h5>
                <div class="max-w-sm mx-auto">
                    <select id="NEW_TIPO_USUARIO" name="NEW_TIPO_USUARIO" wire:model="NEW_TIPO_USUARIO"  class="bg-gray-50 border mb-5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Seleccione una opción</option>
                  
                    </select>
                </div>
                <div class="flex pt-4 w-full justify-between">
                    <div class="flex items-center h-5">
                        <input id="checkTipoUsuario" name="checkTipoUsuario" wire:model="checkTipoUsuario" type="checkbox" wire:click="checkTipoGuardar"  class="w-6 h-6 border border-gray-500 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                        <label for="checkTipoUsuario" class="ms-2 text-sm font-medium text-gray-900 ">Checkear antes de guardar los cambios</label>
                    </div>
                    <div>
                        <button
                        wire:click="cambiarTipoUsuario"
                        class=" opacity-50 pointer-events-none focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2"
                        >Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    
</div>
</div>
{{-- <div class="@if($currentStep!=2) hidden @endif bg-white min-h-screen ">
<div class="w-full grid grid-cols-6 py-12 mx-auto bg-green-600 rounded-md">
    <div class="col-span-2 p-2 text-center">
        <button
        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2 "
        wire:click="showStep(0)"
        >Volver</button>
    </div>
    <div class="col-span-3 p-2">
        <h5 class="text-2xl text-center my-2 font-bold text-white">Gestionar permisos del gestor</h5>
    </div>
</div>
<div class="max-w-7xl mx-auto p-4">
    <div class="bg-white">
        @if ($ID_USUARIO!=null)
            <div class="w-full text-xl bg-green-600 text-white text-center  p-6">
                 <u>{{$usuarios[$ID_USUARIO]['EMAIL']}}</u>
            </div>
        @endif
        <table class="w-full text-lg text-left text-gray-500 ">
            <thead class="text-xl bg-green-600 text-white uppercase  ">
                <tr>
                    <th scope="col" class="px-4 py-3 text-center">Proyecto</th>
                    <th scope="col" class="px-4 py-3 text-center">Edificios</th>
                    <th scope="col" class="px-4 py-3 text-center">Permiso</th>
                    <th scope="col" class="px-4 py-3 text-center">
                        <span class="sr-only">Opciones</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $id=>$proyecto)
                <tr class="border-b border-gray-700">
                    <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{$proyecto['NOMBRE_PROYECTO']}}</td>
                    <td class="px-4 py-3 text-center">
                        @if (count($proyecto['EDIFICIOS'])!=0)
                            {{count($proyecto['EDIFICIOS'])}}
                            @if (count($proyecto['EDIFICIOS'])>1)
                                edificios
                            @else
                                edificio
                            @endif
                        @else
                        N/D
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        @if(in_array($id, $permisos))
                            <i class="fa-solid fa-link font-bold text-green-600 text-xl"></i>
                        @else
                            <i class="fa-solid fa-link-slash text-gray-400 text-xl"></i>
                        @endif
                    </td>
                    <td class="px-4 py-3 flex items-center justify-end">
                        <button id="proyecto-{{$id}}-dropdown-button" data-dropdown-toggle="proyecto-{{$id}}-dropdown"
                        class="inline-flex items-center p-0.5 text-lg font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none" type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                        <div id="proyecto-{{$id}}-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-base text-gray-700" aria-labelledby="proyecto-{{$id}}-dropdown-button">
                                <li>
                                    <button class="block py-2 px-4 hover:bg-gray-100 " wire:click="cambiarPermiso({{$id}})">
                                        Cambiar permiso
                                    </button>
                                </li>
                                <li>
                                    <a href="{{route('proyecto.show', $id)}}" target="_blank" class="block py-2 px-4 hover:bg-gray-100 ">Ver Proyecto</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
</div> --}}
{{-- <div class="@if($currentStep!=3) hidden @endif bg-white min-h-screen overflow-hidden">
    <div class="w-full grid grid-cols-6 py-12 mx-auto bg-green-600 rounded-md">
        <div class="col-span-2 p-2 text-center">
            <button
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-5 py-2.5 me-2 mb-2 "
            wire:click="showStep(0)"
            >Volver</button>
        </div>
        <div class="col-span-3 p-2">
            <h5 class="text-2xl text-center my-2 font-bold text-white">Gestionar documentación del usuario</h5>
        </div>
    </div>
    <div class="w-full">
        @if($currentStep==3)
        @livewire('gestor-documentacion', ['CARPETA'=>'usuarios', 'ID_TIPO'=>$ID_USUARIO])
        @endif
    </div>
</div> --}}