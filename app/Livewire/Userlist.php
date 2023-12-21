<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Userlist extends Component
{   
    public $users = [];

    public function mount()
    {
        $this->users = User::get();
    }   


    #[On('update-records')]
    public function updated()
    {
        $this->mount();
    }
    
    public function editForm($id) {
        $this->dispatch('update-user' , id:$id);
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('success', 'User deleted successfully.');
        $this->mount();
    }
    
    #[On('update-list')]
    public function updateRecord($search){

        $this->users = User::where('email', 'like', '%' . $search . '%')
        ->orWhere('name', 'like', '%' . $search . '%')
        ->get();
    }

    public function check($id)
    {
        $user = User::findOrFail($id);
        $this->dispatch('post-created', email: $user->email);
    }


    public function render()
    {
        return view('components.userlist');
    }
}
