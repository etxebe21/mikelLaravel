<div class="grid grid-cols-4 md:grid-cols-6 gap-2 lg:gap-8 p-6 lg:p-8">
    <div class="col-span-2 ">
        <x-application-logo class="block h-12 w-auto" />
    </div>
    <div class="col-span-4">
        <ul class="flex my-3" style="min-width: 100%">
            <li class="list-group-item py-3 px-5" style="min-width:33%;">
                <a href="#" class="text-center text-base text-gray-600 font-light hover:text-green-600 hover:underline">Política de privacidad</a>
            </li>
            <li class="list-group-item py-3 px-5" style="min-width:33%;">
                <a href="#" class="text-center text-base text-gray-600 font-light hover:text-green-600 hover:underline">Política de cookies</a>
            </li>
            <li class="list-group-item py-3 px-5" style="min-width:33%;">
                <a href="#"  class="text-center text-base text-gray-600 font-light hover:text-green-600 hover:underline">Política de privacidad</a>
            </li>
        </ul>

    </div>
    <div class="col-span-6 text-center" style="margin-top:-75px">
        <div class="mx-auto my-5 flex justify-center">
            <span class="inline-block h-1 w-40 rounded-full bg-plat-orange"></span>
            <span class="mx-1 inline-block h-1 w-3 rounded-full bg-plat-orange"></span>
            <span class="inline-block h-1 w-1 rounded-full bg-plat-orange"></span>
        </div>
       <p class="text-gray-400">Desarrollado por <a href="https://www.stechome.es/" target="_blank" class="text-green-500">SSBUILD</a><small class="text-center" style="font-size:10px; font-style:italic"> | Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</small></p>
    </div>
</div>