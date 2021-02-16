<?php

namespace App\Http\Controllers;

use App\Events\EmailUpdated;
use App\Events\EmailUpdateRequested;
use App\Events\PhoneNumberUpdated;
use App\Events\UsernameUpdated;
use App\Http\Requests\UpdateEmailRequest;
use App\Http\Requests\UpdatePhoneNumberRequest;
use App\Http\Requests\UpdateUsernameRequest;
use App\Models\User;
use App\Services\SettingsService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;

class SettingsController extends Controller
{
    private SettingsService $settingsService;

    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
    }

    public function showSettingsForm()
    {
        $data['user'] = auth()->user();

        return view('settings.settings', $data);
    }

    public function updateUsername(UpdateUsernameRequest $request): RedirectResponse
    {
        try {
            $this->settingsService->updateAttribute('username', $request->input('username'));
            event(new UsernameUpdated());

            $this->setSuccessNotification('Username updated.');
        } catch (Exception $ex) {
            $this->setErrorNotification($ex->getMessage());
        }

        return redirect()->back();
    }

    public function updateEmail(UpdateEmailRequest $request): RedirectResponse
    {
        try {
            /** @var User $user */
            $user = auth()->user();
            $email = $request->input('email');

            if ($email !== $user->email) {
                event(new EmailUpdateRequested($email));

                $this->setSuccessNotification('Please check your new email address to update the email.');
            } else {
                $this->setSuccessNotification('Email updated.');
            }
        } catch (Exception $ex) {
            $this->setErrorNotification($ex->getMessage());
        }

        return redirect()->back();
    }

    public function changeEmail(string $token): RedirectResponse
    {
        $tokenString = Crypt::decryptString($token);
        $stringParts = explode('::', $tokenString);
        $email = $stringParts[0];
        $ttl = $stringParts[1];

        if (time() > $ttl) {
            $this->setErrorNotification('Try to update your email address again. Link expired');
        }

        try {
            $this->settingsService->updateAttribute('email', $email);
            event(new EmailUpdated());

            $this->setSuccessNotification('Email updated.');
        } catch (Exception $ex) {
            $this->setErrorNotification($ex->getMessage());
        }

        return redirect()->route('settings');
    }

    public function updatePhoneNumber(UpdatePhoneNumberRequest $request): RedirectResponse
    {
        try {
            $this->settingsService->updateAttribute('phone_number', $request->input('phone_number'));
            event(new PhoneNumberUpdated());

            $this->setSuccessNotification('Phone number updated.');
        } catch (Exception $ex) {
            $this->setErrorNotification($ex->getMessage());
        }

        return redirect()->back();
    }
}
