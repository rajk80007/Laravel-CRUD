<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        if(auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect()->to('/');
        }
    }
}
