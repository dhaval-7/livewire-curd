<?php

namespace App\Livewire\Layouts;

use Livewire\Attributes\On;
use Livewire\Component;

class Nav extends Component
{   
    public $email = '';

    #[On('post-created')] 
    public function updatePostList($email)
    {   
        $this->email = $email;
    }

    
    public function render()
    {
        return view('components.layouts.nav');
    }
}
