<div class="mb-4">
    <label for="body" class="block text-gray-700 font-bold mb-2">{{ $fieldName }}</label>
    <input wire:model.live="name" type={{$type}} 
        class="w-full border border-gray-300 px-4 py-2 rounded" autocomplete="false" placeholder={{$placeHolder ?? ''}}>
    <span class="text-red-500"> 
    </span>
</div>