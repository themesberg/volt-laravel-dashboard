<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email|unique:users']);
    }
    
    public function register()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required|same:passwordConfirmation',
        ]);

        $user = User::create([
            'email' =>$this->email,
            'password' => Hash::make($this->password),
        ]);
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.base');
    }
}
