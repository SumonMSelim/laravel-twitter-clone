<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Str;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request)
    {
        $data['page_title'] = 'Reset Password';
        $data['token'] = $request->route()->parameter('token');
        $data['email'] = $request->input('email');

        return view('auth.password.reset', $data);
    }

    public function reset(ResetPasswordRequest $request): RedirectResponse
    {
        $data = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::broker()->reset($data, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        if ($response === Password::PASSWORD_RESET) {
            $this->setSuccessNotification(__($response));

            return redirect()->route('login');
        } else {
            $this->setErrorNotification(__($response));

            return redirect()->route('password.request');
        }
    }

    protected function resetPassword($user, $password)
    {
        $this->setUserPassword($user, $password);
        $user->setRememberToken(Str::random(60));
        $user->save();

        event(new PasswordReset($user));
    }

    protected function setUserPassword($user, $password)
    {
        $user->password = bcrypt($password);
    }
}
