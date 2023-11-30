<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{   

    public $title = 'product';

    public function render()
    {
        return view('livewire.product')->title($this->title);
    }
}
