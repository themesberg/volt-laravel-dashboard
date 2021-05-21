<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public $showSavedAlert = false;
    public $showDemoNotification = false;

    protected $rules = [
        'user.first_name' => 'max:15',
        'user.last_name' => 'max:20',
        'user.birthday' => 'date_format:Y-m-d',
        'user.email' => 'email',
        'user.phone' => 'numeric',
        'user.gender' => '',
        'user.address' => 'max:20',
        'user.number' => 'numeric',
        'user.city' => 'max:20',
        'user.zip' => 'numeric',
    ];

    public function mount() { $this->user = auth()->user(); }

    public function save()
    {
        if(env('IS_DEMO')) {
            $this->showDemoNotification = true;
        }
        else {
        $this->validate();

        $this->user->save();

        $this->showSavedAlert = true;   
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
