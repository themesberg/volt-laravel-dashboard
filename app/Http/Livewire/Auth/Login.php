<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    //This mounts the default credentials for the admin. Remove this section if you want to make it public.
    public function mount()
{
    $this->fill([
        'email' => 'admin@volt.com',
        'password' => 'secret',
        ]);
}

    public function login()
    {
        $credentials = $this->validate();
        return auth()->attempt($credentials)
                ? redirect()->intended('/profile')
                : $this->addError('email', trans('auth.failed'));

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
