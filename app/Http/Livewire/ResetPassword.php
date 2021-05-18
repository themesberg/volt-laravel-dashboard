<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPassword extends Component
{   
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $isPasswordChanged = false;

    public $rules=[
        'email' => 'required|email|exists:users',
        'password' => 'required|same:passwordConfirmation|min:6',
    ];
    protected $messages = [
        'email.exists' => 'The Email Address must be in our database.',
    ];

    public function resetPassword() {
        $this->validate();
        $existingUser = User::where('email', $this->email)->first();
        if($existingUser) {
            $existingUser->update([
                'password' => Hash::make($this->password)
            ]);
        }
        $this->isPasswordChanged = true;
    }
    
    public function render()
    {
        return view('livewire.reset-password')
            ->layout('layouts.base');
    }
}
