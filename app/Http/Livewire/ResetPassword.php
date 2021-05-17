<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResetPassword extends Component
{   
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public $rules=[
        'email' => 'required|email|exists:users',
        'password' => 'required|same:passwordConfirmation|min:6',
    ];
    protected $messages = [
        'email.exists' => 'The Email Address must be in our database.',
    ];

    public function resetPassword() {
/////to do : add functionality here
    }
    
    public function render()
    {
        return view('livewire.reset-password')
            ->layout('layouts.base');
    }
}
