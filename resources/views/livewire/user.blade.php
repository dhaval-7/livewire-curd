<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <section>
                    <div class="my-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            wire:click="create">Add User</button>
                    </div>
                    @if ($isOpen)
                        <div class="fixed inset-0 flex items-center justify-center z-50">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <div class="relative bg-gray-200 p-8 rounded shadow-lg w-1/2">
                                <h2 class="text-2xl font-bold mb-4">{{ $userId ? 'Edit User' : 'Create User' }}</h2>
                                <form wire:submit.prevent="{{ $userId ? 'update' : 'store' }}">
                                    <div class="mb-4">
                                        <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                                        <input type="text" wire:model="name" id="name"
                                            class="w-full border border-gray-300 px-4 py-2 rounded">
                                        <span class="text-red-500">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="mb-4">
                                        <label for="body" class="block text-gray-700 font-bold mb-2">Email:</label>
                                        <input type="email" wire:model="email" id="email"
                                            class="w-full border border-gray-300 px-4 py-2 rounded" autocomplete="off">
                                        <span class="text-red-500">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="flex justify-end">

                                        <button type="submit"
                                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">{{ $userId ? 'update' : 'create' }}</button>
                                        <button type="button"
                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                                            wire:click="closeModal">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    @endif
                </section>
                @include('components.list')
            </div>
        </div>
    </div>
</div>
