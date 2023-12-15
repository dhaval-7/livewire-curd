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
    public $search;


    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:3')]
    public $email;
    public $userId;
    public $users = [];
    public $testevent = '';


    public function delete($id)
    {
        ModelsUser::find($id)->delete();
        session()->flash('success', 'User deleted successfully.');
        $this->reset('name', 'email');
        $this->mount();
    }


    public function mount()
    {
        $this->users = ModelsUser::get();
    }

    #[On('update-records')]
    public function updated()
    {
        $this->mount();
    }


    public function check($id)
    {
        $user = ModelsUser::findOrFail($id);
        $this->dispatch('post-created', email: $user->email);
    }

    public function render()
    {

        return view('livewire.user')->title($this->title);
    }
}
