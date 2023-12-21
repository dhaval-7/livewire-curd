<div>
    <h2 class="text-2xl font-bold mb-4">{{ $userId ? 'Edit User' : 'Create User' }}</h2>
    <form wire:submit.prevent="{{ $userId ? 'update' : 'store' }}">

        @livewire('atoms.input', ['wireModel' => "wire:model=name", 'modelfieldName' => 'email', 'type' => 'text'])
        
        @error( $email ) 
        {{ $message }}        
        @enderror

        

        {{-- @livewire('atoms.input', [ 'wireModel' => "wire:model=modelfieldName" , 'modelfieldName' => 'name' ,'fieldName' => 'Name' , 'type' => 'text' , 'value' => '','name' => '']) --}}

        {{-- @livewire('atoms.input', [ 'wireModel' => "wire:model=email" , 'modelfieldName' => 'email' ,'fieldName' => 'Email' , 'type' => 'email' , 'value' => '']) --}}
        
        {{$email}}

        {{-- @include('livewire.atoms.input', [
            'wireModel' => 'wire:model=name',
            'modelfieldName' => 'name',
            'fieldName' => 'Name',
            'type' => 'text',
            'value' => '',
        ])

        @include('livewire.atoms.input', [
            'wireModel' => 'wire:model=email',
            'modelfieldName' => 'email',
            'fieldName' => 'Email',
            'type' => 'email',
            'value' => '',
        ]) --}}


        <div class="flex justify-end">


            @include('livewire.atoms.button', [
                'type' => 'submit',
                'value' => $userId ? 'update' : 'create',
                'color' => 'success',
            ])



            {{-- <button class="btn btn-inverse-success btn-fw"
                type="submit">{{ $userId ? 'update' : 'create' }}</button>    --}}

            {{-- <a class="nav-link" href={{ route('user.create') }} wire:navigate>
                <button type="button" class="btn btn-inverse-primary btn-fw">Add User</button>
            </a> --}}
            {{-- <a href={{ route('user') }} wire:navigate>
                <button type="button" class="btn btn-inverse-info btn-fw">
                    Back
                </button>
            </a> --}}
        </div>
    </form>
</div>
