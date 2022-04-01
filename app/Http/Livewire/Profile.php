<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public $showSavedAlert = false;
    public $showDemoNotification = false;

    public function rules() {

        return [
            'user.first_name' => 'max:15',
            'user.last_name' => 'max:20',
            'user.email' => 'email',
            'user.gender' => ['required', Rule::in(['Male', 'Female', 'Other'])],
            'user.address' => 'max:40',
            'user.number' => 'numeric',
            'user.city' => 'max:20',
            'user.ZIP' => 'numeric',
        ];
    }

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
