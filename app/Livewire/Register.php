<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;



class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    
    public function render()
    {
        return view('livewire.register');
    }

    public function saveuser()
    {
        $user = new user;
        if($this->password == $this->password_confirmation){
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = bcrypt($this->password);
            $user->save();
            $this->reset(['name', 'email', 'password', 'password_confirmation']);
            
        } else
        {
            dd('Password does not match');
        }
        

    }
}
