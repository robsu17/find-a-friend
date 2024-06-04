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

    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return to_route('organization.index');
        }

        return to_route('organization.login')->withErrors([
            'message' => 'Credenciais inválidas'
        ]);
    }
}
