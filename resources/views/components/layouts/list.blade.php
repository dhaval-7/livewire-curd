<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>

                <div class="table-responsive">
                    <table class="table">
                        @if (count($users))
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        @endif
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td> {{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href={{ route('user.edit', ['id' => $user->id]) }} wire:navigate>
                                            <button class="btn btn-inverse-success btn-fw" type="button">
                                                edit
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-inverse-danger btn-fw"
                                            onclick="return confirm('Are you sure you want to delete this item?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $user->id }})">
                                            delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <p>No user found</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
