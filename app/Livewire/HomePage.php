<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class HomePage extends Component
{
    public $user = 'Dhaval';
    public $user_name = 'test';
    public $test = '';

    protected $listeners = ['post-created'];


 

    #[On('test-event')] 
    public function updatePostList()
    {   
        $this->test = 'test';
    }


    function mount()
    {
        // $this->user = $user; 
    }

    public function render()
    {
        return view('livewire.home');
    }
}
