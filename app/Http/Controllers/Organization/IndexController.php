<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Services\errors\ResourceNotFound;
use App\Services\GetOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct(private readonly GetOrganization $getOrganization)
    {
    }

    public function index()
    {
        try {
            $organization = $this->getOrganization->handle(Auth::user()->getAuthIdentifier());
        } catch (ResourceNotFound $exception) {
            return view('pages.organization.index')->withErrors(
                ['message' => $exception->getMessage()]
            );
        }

        return view('pages.organization.index', compact('organization'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('organization.login');
    }
}
