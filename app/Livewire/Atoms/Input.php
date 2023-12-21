<?php

namespace App\Livewire\Atoms;

use Livewire\Component;

class Input extends Component
{

    public $fieldName;
    public $errorMsg;
    public $name;
    public $type = '';
    public $placeHolder = '';
    public $modelfieldName;
    public $wireModel = '';
    

    public $message = '';


    // public function  mount(){
    //      $this->name = "asds";
    // }
    public function updated()
    {

        $this->dispatch('from-data', ['name' => $this->modelfieldName, 'value' => $this->name]);
    }

    public function render()
    {
        return view('livewire.atoms.input');
    }
}
