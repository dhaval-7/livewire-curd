<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public $isOpen = 0;
    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:3')]
    public $email;
    public $userId;
    public $users = [];


    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function create()
    {
        $this->reset('name', 'email', 'userId');
        $this->openModal();
    }

    public function store()
    {
        $this->validate();
        ModelsUser::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->mount();
        $this->reset('name', 'email');
        $this->closeModal();
        session()->flash('success', 'User created successfully.');
    }


    public function update()
    {
        if ($this->userId) {
            $post = ModelsUser::findOrFail($this->userId);
            $post->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            session()->flash('success', 'User updated successfully.');
            $this->closeModal();
            $this->reset('name', 'email', 'userId');
        }
    }

    public function edit($id)
    {
        $post = ModelsUser::findOrFail($id);
        $this->userId = $id;
        $this->name = $post->name;
        $this->email = $post->email;
        $this->openModal();
        $this->mount();
    }


    public function delete($id)
    {
        ModelsUser::find($id)->delete();
        session()->flash('success', 'User deleted successfully.');
        $this->reset('name', 'email');
        $this->mount();
    }

    public function mount()
    {
        $this->users = ModelsUser::get();
    }

    public function updated()
    {
        $this->users = ModelsUser::get();
    }

    public function render()
    {
        return view('livewire.user');
    }
}
