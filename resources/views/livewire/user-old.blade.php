<div class="main-panel">
    <h2>{{ $testevent }}</h2>
    <div class="content-wrapper">
        <section>
            <a class="nav-link" href={{ route('user.create') }} wire:navigate>
                <button type="button" class="btn btn-inverse-primary btn-fw">Add User</button>
            </a>
            <input class="form-control" wire:model="search" type="text" placeholder="Search...">
        </section>
        @livewire('user-card')
       @include('components.userlist')
    </div>
</div>
