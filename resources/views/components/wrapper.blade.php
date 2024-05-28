<div class="h-screen flex flex-col justify-center items-center bg-blue-100" style="background-image: url('img/login.jpg'); background-size: cover; background-position: center;">
    <h1 class="mb-6 text-2xl italic">
        <img src="{{URL::asset('img/logo1.jpg')}}" alt="" class="w-48 m-5 rounded-md bg-opacity-25">    
    </h1>
    
    <div class="w-full sm:max-w-md py-4 px-6 bg-white shadow sm:rounded">
        {{ $slot }}
    </div>
</div>