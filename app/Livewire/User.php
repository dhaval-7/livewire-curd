<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public $title = 'User';
    public $testevent = '';

    public function render()
    {
        return view('livewire.user')->title($this->title);
    }
}
