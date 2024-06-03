<?php

namespace App\Http\Controllers\Organization;

use App\DTO\OrganizationDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterOrgRequest;
use App\Services\CreateOrganizationService;

class RegisterController extends Controller
{
    public function __construct(private CreateOrganizationService $createOrganizationService) {}

    public function index()
    {
        return view('pages.organization.register');
    }

    public function create(RegisterOrgRequest $request) {

        $organizationDto = new OrganizationDTO(
            $request->get('nameOrg'),
            $request->get('address'),
            $request->get('whatsapp'),
            $request->get('cep'),
        );

        $this->createOrganizationService->handle($organizationDto);

        return to_route('organization.register');
    }
}
