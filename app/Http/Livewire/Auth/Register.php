<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $passwordConformation;

    public function register()
    {
        $this->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:passwordConformation',
            'passwordConformation' => 'required|min:6'
        ]);


        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // $this->reset();
        return redirect(route('dashboard'));
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
