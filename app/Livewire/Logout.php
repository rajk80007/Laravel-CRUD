<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        session(['user' => null]);
        Auth::logout();

        return view('livewire.login');
    }
}
