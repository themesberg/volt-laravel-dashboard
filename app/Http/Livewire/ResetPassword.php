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
    public $wrongEmail = false;
    public $urlId='';

    public $rules=[
        'email' => 'required|email|exists:users',
        'password' => 'required|same:passwordConfirmation|min:6',
    ];
    protected $messages = [
        'email.exists' => 'The Email Address must be in our database.',
    ];

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email|exists:users']);
    }
    public function mount($id) {
        $existingUser = User::find($id);
        $this->urlId = intval($existingUser->id);
    }

    public function resetPassword() {
        $this->validate();
        $existingUser = User::where('email', $this->email)->first();
        if($existingUser && $existingUser->id == $this->urlId) {
            $existingUser->update([
                'password' => Hash::make($this->password)
            ]);
            $this->isPasswordChanged = true;
            $this->wrongEmail = false;
        }
        else {
            $this->wrongEmail = true;
        }
    }
    
    public function render()
    {
        return view('livewire.reset-password');
    }
}
