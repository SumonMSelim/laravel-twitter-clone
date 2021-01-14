<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        $data['pageTitle'] = 'Register an account with us';

        return view('auth.register', $data);
    }

    public function processRegistration(RegistrationRequest $request)
    {

    }

    public function showLoginForm()
    {
        $data['pageTitle'] = 'Login to your account';

        return view('auth.login', $data);
    }

    public function processLogin(LoginRequest $request)
    {

    }
}
