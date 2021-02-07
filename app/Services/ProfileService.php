<?php

namespace App\Services;

use App\Models\User;
use Exception;

class ProfileService
{
    /**
     * @param  array  $data
     * @throws Exception
     */
    public function updateProfile(array $data)
    {
        /** @var User $user */
        $user = auth()->user();

        try {
            $user->update($data);
        } catch (Exception $exception) {
            throw new Exception('Profile could not be updated');
        }
    }
}
