<?php

namespace App\Http\Controllers\Organization;

use App\DTO\AdminDto;
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

        $adminDto = new AdminDto(
            $request->get('admin'),
            $request->get('email'),
            $request->get('password')
        );

        $organizationDto = new OrganizationDTO(
            $request->get('nameOrg'),
            $request->get('address'),
            $request->get('whatsapp'),
            $request->get('cep'),
        );

        $this->createOrganizationService->handle($adminDto, $organizationDto);

        return to_route('organization.register');
    }
}
