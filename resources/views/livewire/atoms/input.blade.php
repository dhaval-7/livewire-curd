<div class="mb-4">
    <label for="body" class="block text-gray-700 font-bold mb-2">{{ $fieldName }}</label>
    <input type={{$type}} 
     {{-- {{ $wireModel }} --}}
    wire:model= {{$modelfieldName}} 
        class="w-full border border-gray-300 px-4 py-2 rounded" autocomplete="false" placeholder={{$placeHolder ?? ''}}>
    <span class="text-red-500">
        @error( $modelfieldName )
            {{ $message }}
        @enderror
    </span>
</div>