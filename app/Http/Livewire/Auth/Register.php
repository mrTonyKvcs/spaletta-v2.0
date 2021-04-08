<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $phoneNumber;
    public $email;
    public $regPassword;
    public $regPassword_confirmation;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'phoneNumber' => ['required', 'string', 'max:15'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'regPassword' => ['required', 'confirmed'],
    ];

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function submit()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'phone_number' => $this->phoneNumber,
            'email' => $this->email,
            'password' => Hash::make($this->regPassword),
        ]);

        auth()->login($user);

        return redirect()->route('pages.menu');
    }
}
