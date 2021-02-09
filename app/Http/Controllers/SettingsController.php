<?php

namespace App\Http\Controllers;

use App\Events\EmailUpdated;
use App\Events\PhoneNumberUpdated;
use App\Events\UsernameUpdated;
use App\Http\Requests\UpdateEmailRequest;
use App\Http\Requests\UpdatePhoneNumberRequest;
use App\Http\Requests\UpdateUsernameRequest;
use App\Services\SettingsService;
use Exception;
use Illuminate\Http\RedirectResponse;

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
            $this->settingsService->updateAttribute('email', $request->input('email'));
            event(new EmailUpdated());

            $this->setSuccessNotification('Email updated.');
        } catch (Exception $ex) {
            $this->setErrorNotification($ex->getMessage());
        }

        return redirect()->back();
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

