<?php

namespace App\Livewire\Atoms;

use Livewire\Component;

class Search extends Component
{
    public $search;
    

    public function change() {

        $this->dispatch('update-list',search:$this->search);
    }


    public function render()
    {
        return view('livewire.atoms.search');
    }
}
