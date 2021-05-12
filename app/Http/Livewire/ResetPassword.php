<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.reset-password')
            ->layout('layouts.base');
    }
}
