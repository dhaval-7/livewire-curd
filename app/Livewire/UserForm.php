<?php

namespace App\Livewire;

use App\Livewire\User as LivewireUser;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserForm extends Component
{

    public $title = 'Create User';
    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:3')]
    public $email;

    public $userId;
    public $users = [];


    public function store()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->reset('name', 'email');
        session()->flash('success', 'User created successfully.');
        $this->redirect(LivewireUser::class,  navigate: true);

        // return redirect(route('user'));
    }


    public function update()
    {
        if ($this->userId) {
            $user = User::findOrFail($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            session()->flash('success', 'User updated successfully.');
            $this->reset('name', 'email', 'userId');
            $this->redirect(LivewireUser::class,  navigate: true);
            // return redirect(route('user'));

        }
    }


    public function edit($id)
    {
        $post = User::findOrFail($id);
        $this->userId = $id;
        $this->name = $post->name;
        $this->email = $post->email;
        $this->title = 'Edit User';
        
        $this->dispatch('reRenderParent')->to(HomePage::class);
    }


    public function mount($id = '')
    {
        if ($id) {
            $this->edit($id);
        }
    }

    public function render()
    {
        return view('livewire.user.user-form')->title($this->title); 
        // return view('livewire.user.user-form',['title' => $this->title, 'userName' =>    $this->name]);
        // ->with(['title' => $this->title, 'userName' =>    $this->name]);
    }
}
