<?php

namespace App\Livewire;

use App\Livewire\User as LivewireUser;
use App\Models\User;
use Livewire\Attributes\On;
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
        // dd($this->name , $this->email);

        $this->validate();
        $user =  User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->reset('name', 'email');
        $this->mount();
        $this->dispatch('update-records');
    }


    public function update()
    {
        if ($this->userId) {
            $user = User::findOrFail($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->reset('name', 'email', 'userId');
            $this->dispatch('update-records');
        }
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('success', 'User deleted successfully.');
        $this->reset('name', 'email');
        $this->mount();
    }


    #[On('from-data')]
    public function formData($data)
    {       
        // $this->name ='testneme';
        $this->{$data['name']} = $data['value'];
    }


    #[On('update-user')]
    public function editForm($id)
    {       
        $this->edit($id);
    }

    public function edit($id)
    {
        $post = User::findOrFail($id);
        $this->userId = $id;
        $this->name = $post->name;
        $this->email = $post->email;
        $this->title = 'Edit User';
        $this->mount();
    }


    public function mount($id = '')
    {   
        // $this->email = 'test@email.com';
        // $this->name = 'test';
        if ($id) {
            $this->edit($id);
        }
    }

    public function check($id)
    {
        $user = User::findOrFail($id);
        $this->dispatch('post-created', email: $user->email);
        // $this->dispatch('reRenderParent',id: $id);
    }


    public function render()
    {
        return view('livewire.user.user-form')->title($this->title); 
        // return view('livewire.user.user-form',['title' => $this->title, 'userName' =>    $this->name]);
        // ->with(['title' => $this->title, 'userName' =>    $this->name]);
    }
}
