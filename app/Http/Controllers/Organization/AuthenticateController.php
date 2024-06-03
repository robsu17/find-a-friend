<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateRequest;
use App\Services\errors\InvalidCredentialsError;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function index()
    {
        return view('pages.organization.login');
    }

    /**
     * @throws InvalidCredentialsError
     */
    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = $request->validated();

        try {
            if (!Auth::attempt($credentials)) {
                throw new InvalidCredentialsError();
            }

            return to_route('organization.index');

        } catch (\Exception $error) {
            if ($error instanceof InvalidCredentialsError) {
                return to_route('organization.login')->withErrors([
                    'message' => $error->getMessage()
                ]);
            }

            return to_route('organization.login')->withErrors([
                'message' => 'Algum erro ocorreu ao tentar logar'
            ]);
        }
    }
}
