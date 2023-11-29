<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
    @if (!count($users))
        
    @else
        
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
    @endif
        @forelse ($users as $user)
            <tbody wire:key="{{ $user->id }}">
                <tr class="bg-white
                border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>

                    <td class="px-6 py-4">
                        <button class="" wire:click="edit({{ $user->id }})">
                            <i class="bi bi-pencil-square"></i>
                        </button>


                        <button type="button" class=""
                            onclick="return confirm('Are you sure you want to delete this item?') || event.stopImmediatePropagation()"
                            wire:click="delete({{ $user->id }})">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>

            </tbody>
        @empty
            <p>No user found</p>
        @endforelse
    </table>
</div>
