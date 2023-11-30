<div class="main-panel">
    <div class="content-wrapper">
        <section>

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
                    <button class="btn btn-inverse-success btn-fw"
                        type="submit">{{ $userId ? 'update' : 'create' }}</button>
                    <a href={{ route('user') }} wire:navigate>
                        <button type="button" class="btn btn-inverse-info btn-fw">
                            Back
                        </button>
                    </a>
                </div>
            </form>


        </section>
    </div>
</div>
