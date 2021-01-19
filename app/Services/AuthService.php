<?php

namespace App\Services;

use App\Events\LoggedIn;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\Authenticatable;

class AuthService
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param array $data
     * @return User
     * @throws Exception
     */
    public function register(array $data): User
    {
        try {
            $data['password'] = bcrypt($data['password']);
            $user = $this->user->create($data);
            event(new Registered($user));

            return $user;
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    /**
     * @param array $data
     * @return User|null
     * @throws Exception
     */
    public function login(array $data): ?Authenticatable
    {
        $identifier = (string) $data['identifier'];

        $user = User::select(['id', 'email', 'email_verified_at'])
            ->where('email', $identifier)
            ->orWhere('phone_number', $identifier)
            ->orWhere('username', $identifier)
            ->first();

        if (is_null($user)) {
            throw new Exception('User not found.');
        }

        if (! $user->hasVerifiedEmail()) {
            throw new Exception('Your account is not verified yet. Please verify your account.');
        }

        if (auth()->attempt(['email' => $user->email, 'password' => $data['password']])) {
            $user = auth()->user();
            event(new LoggedIn($user));

            return $user;
        }

        throw new Exception('Invalid credentials.');
    }
}
