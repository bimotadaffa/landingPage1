<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class Login extends Component
{
    public $email, $password, $remember;
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function loginUser()
    {
        $this->validate();
        $throttleKey = strtolower($this->email) . '|' . request()->ip();

        if(RateLimiter::tooManyAttempts($throttleKey, 5)){
            $this->addError('email',__('auth.throttle',[
                'second' => RateLimiter::availableIn($throttleKey)
            ]));
            return null;
        }

        if(!Auth::attempt($this->only(['email', 'password']), $this->remember)){
            RateLimiter::hit($throttleKey);
            $this->addError('email',__('auth.failed'));
            return null;
        }
        return redirect()->to('/home');
    }
}
