<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTER</title>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
        <div class="h-screen flex flex-col justify-center items-center bg-blue-100">
            <h1 class="mb-6 text-2xl">Crear cuenta</h1>
            <div class="w-full sm:max-w-md py-4 px-6 bg-white shadow sm:rounded">
                <form action="">
                    <div>
                        <label class="text-sm text-gray-700">Nombre</label>
                        <input type="text" name="name" 
                        class="rounded shadow border border-gray-300 p-2 mt-1 w-full "> 
                    </div>
                    <div>
                        <label class="text-sm text-gray-700">Email</label>
                        <input type="text" name="email" 
                            class="rounded shadow border border-gray-300 p-2 mt-1 w-full "> 
                    </div>
                    <div>
                        <label class="text-sm text-gray-700">Password</label>
                        <input type="password" name="password" 
                            class="rounded shadow border border-gray-300 p-2 mt-1 w-full "> 
                    </div>

                    <div class="flex items-center gap-4 justify-end mt-8">
                        <a href="/login" class="underline text-sm text-gray-600 hover:text-gray-900 ">
                            Estoy registrado</a>
                        <button type="submit" class="px-4 py-2 bg-blue-600 sm:rounded">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
