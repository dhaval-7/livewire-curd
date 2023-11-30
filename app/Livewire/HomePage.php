<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $user = 'Dhaval';
    public $userName = 'test';
    protected $listeners = ['reRenderParent'];

    public function reRenderParent()
    {   
        $this->mount();
        $this->render();
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
