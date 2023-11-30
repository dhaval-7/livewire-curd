<?php

namespace App\Livewire;

use Livewire\Component;

class Admin extends Component
{   

    // #[Layout('layouts.app')] 
    public $title = 'Admin';


    public function mount( ){
        // $this->title = 'admin';
    }

    public function render()
    {
        return view('livewire.admin')->title($this->title);
    }
}
