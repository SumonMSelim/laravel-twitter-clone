<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify(Request $request): RedirectResponse
    {
        $id = $request->route('id');
        $hash = (string) $request->route('hash');
        $user = User::findOrFail($id);

        if (! hash_equals($hash, sha1($user->getEmailForVerification()))) {
            $this->setErrorNotification('Invalid verification link.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('login');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        $this->setSuccessNotification('User account verified.');

        return redirect()->route('login');
    }
}
