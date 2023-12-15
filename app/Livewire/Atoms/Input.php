<?php

namespace App\Livewire\Atoms;

use Livewire\Component;

class Input extends Component
{   

    public $fieldName = '';
    public $type = '';
    public $placeHolder = '';
    public $modelfieldName = '';
    public $wireModel = '';

    public $message = '';


    public function render()
    {
        return view('livewire.atoms.input');
    }
}
