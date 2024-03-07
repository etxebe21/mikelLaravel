<button {{ 
   $attributes->merge([
        'class'=> 'px-4 py-2 bg-blue-800 text-xs text-white uppercase hover:bg-blue-600 sm:rounded' 
    ])
}}>
    {{ $slot }}
</button>
