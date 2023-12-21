<li class="nav-item nav-search d-none d-lg-block w-100">

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="search">
                <i class="mdi mdi-magnify"></i>
            </span>
        </div>
        <input  wire:model.change="search" wire:change="change" type="text" class="form-control" placeholder="Search now" aria-label="search"
            aria-describedby="search">
    </div>
</li>