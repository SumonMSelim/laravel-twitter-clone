<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\Services\ProfileService;
use Exception;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    private ProfileService $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function showProfile()
    {
        $data['user'] = auth()->user();
        $data['tweets'] = $data['user']->tweets;

        return view('profile.profile', $data);
    }

    public function updateProfile(EditProfileRequest $request): RedirectResponse
    {
        try {
            $this->profileService->updateProfile($request->except(['_token']));
            $this->setSuccessNotification('Profile updated');
        } catch (Exception $ex) {
            $this->setErrorNotification($ex->getMessage());
        }

        return redirect()->back();
    }
}
