
<div class="max-w-7xl mx-auto bg-white bg-opacity-25 rounded-md mb-6" >
    <div class="grid grid-cols-4  ">
        <div class="col-span-1 flex justify-center">
                <x-application-logo class=" rounded-md " />
        </div>
        <div class="col-span-3">
            <h1 class="mt-6 text-center text-3xl font-bold text-green-800">
                LISTA DE USUARIOS            </h1>
            <div class="mx-auto my-4 flex justify-center">   
            </div>
            <p class="mt-6 text-gray-900  text-center italic font-bold  leading-relaxed">
               Aquí puede ver los usuarios registrados en la plataforma
            </p>
        </div>
    </div>
</div>
<div class="bg-white rounded shadow-xl p-6 lg:p-8">
    
    @if(count($usuarios)!=0)
    <table class="min-w-full uppercase text-left text-sm font-light">
      <thead class="border-b font-medium dark:border-neutral-500">
          <tr class="border-b border-green-200 bg-plat-green text-green-700">
             
              <th scope="col" class="px-4 py-4 text-xl">NOMBRE</th>
              <th scope="col" class="px-4 py-4 text-xl">EMAIL</th>
              <th scope="col" class="px-4 py-4 text-xl">TIPO USUARIO</th>
              <th scope="col" class="px-4 py-4 text-xl"></th>
              <th scope="col" class="px-4 py-4 text-xl"></th>
          </tr>
      </thead>
      <tbody>
          @foreach ($usuarios as $key=>$usuario )
          <tr class="border-b dark:border-neutral-500">
                  <td class="px-2 py-1 text-base">{{$usuario->name}}</td>
                  <td class="px-2 py-1 text-base">{{$usuario->email}}</td>
                  <td class="px-2 py-1 text-base">{{$usuario->tipo_usuario}}</td>
                  <td class="px-2 py-1">
                        <a href="javascript:void(0);" onclick="eliminarUsuario({{ $usuario->id}})"
                            class="flex flex-col w-2/3 text-center  px-4 py-2.5  font-medium text-white bg-red-600 border border-white rounded-md hover:bg-red-700 focus:z-10 focus:ring-2 focus:ring-red-700  ">
                            <i class="fa-solid fa-trash"></i>BORRAR
                        </a>
                  </td> 
                  <td class="px-2 py-1">
                    <a href="{{route('editar-usuario', $usuario->id)}}" 
                        class="flex flex-col w-2/3 text-center  px-4 py-2.5  font-medium text-white bg-yellow-600 border border-white rounded-md hover:bg-orange-700 focus:z-10 focus:ring-2 focus:ring-orange-700  ">                         
                        <i class="fa-solid fa-pen-to-square mr-2"></i> EDITAR 
                    </a>
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
              <h5>No hay usuarios</h5>
          </td>
      </tr>
      </tbody>
  </table>
    @endif

</div>


<script>
    function eliminarUsuario(id) {
        if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
            window.location.href = "/eliminar-usuario/" + id;
        }
    }
</script>