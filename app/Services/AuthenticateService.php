<?php

namespace App\Services;

use App\Repositories\AdminRepository;
use App\Services\errors\InvalidCredentialsError;
use Illuminate\Support\Facades\Auth;

class AuthenticateService
{
    public function __construct(private readonly AdminRepository $adminRepository)
    {
    }

    /**
     * @throws InvalidCredentialsError
     */
    public function handle(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            throw new InvalidCredentialsError();
        }

        $user = $this->adminRepository->findByEmail($credentials['email']);

        Auth::login($user, $remember = true);
    }
}
