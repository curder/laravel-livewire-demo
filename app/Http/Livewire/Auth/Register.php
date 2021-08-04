<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $email;
    public $password;
    public $passwordConformation;

    public function register()
    {
        User::create([
            'name' => $this->email,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
