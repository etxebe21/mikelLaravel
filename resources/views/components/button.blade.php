<button {{ 
   $attributes->merge([
        'class'=> 'px-4 py-2 bg-green-700 text-xs text-white uppercase hover:bg-green-600 sm:rounded' 
    ])
}}>
    {{ $slot }}
</button>
