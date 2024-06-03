<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateRequest;

class AuthenticateController extends Controller
{
    public function index()
    {
        return view('pages.organization.login');
    }

    public function authenticate(AuthenticateRequest $request)
    {
        return to_route('organization.login');
    }
}
