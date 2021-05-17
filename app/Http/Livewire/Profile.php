<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public $showSavedAlert = false;

    protected $rules = [
        'user.first_name' => 'max:15',
        'user.last_name' => 'max:20',
        'user.birthday' => 'date_format:Y-m-d',
        'user.email' => 'email',
        'user.phone' => '',
        'user.gender' => '',
        'user.address' => '',
        'user.number' => '',
        'user.city' => '',
        'user.zip' => '',
    ];

    public function mount() { $this->user = auth()->user(); }

    public function save()
    {
        $this->validate();

        $this->user->save();

        $this->showSavedAlert = true;
    }


    public function render()
    {
        return view('livewire.profile')
        ->layout('layouts.base');
    }
}
