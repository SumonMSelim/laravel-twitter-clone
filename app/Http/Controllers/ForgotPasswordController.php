<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetLinkEmailRequest;
use Illuminate\Http\RedirectResponse;
use Password;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        $data['pageTitle'] = 'Forgot Password';

        return view('auth.password.request', $data);
    }

    public function sendResetLinkEmail(ResetLinkEmailRequest $request): RedirectResponse
    {
        $response = Password::broker()->sendResetLink($request->only('email'));

        if ($response === Password::RESET_LINK_SENT) {
            $this->setSuccessNotification(__($response));

            return redirect()->route('login');
        } else {
            $this->setErrorNotification(__($response));

            return redirect()->back();
        }
    }
}
