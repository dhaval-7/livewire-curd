<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class UserCard extends Component
{

    public $email = '';

    #[On('post-created')] 
    public function updatePostList($email)
    {   
        $this->email = $email;
    }



    public function testevent(){
        $this->dispatch('test-event');
    }


    public function render()
    {
        return view('livewire.user.user-card');
    }
}
