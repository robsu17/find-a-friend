<?php

namespace App\Services;

use App\DTO\AdminDto;
use App\DTO\OrganizationDTO;
use App\Repositories\AdminRepository;
use App\Repositories\OrganizationRepository;

class CreateOrganizationService
{
    public function __construct(private readonly OrganizationRepository $organizationRepository, private readonly AdminRepository $adminRepository) {}

    public function handle(AdminDto $adminDto, OrganizationDTO $organizationDTO): OrganizationDTO
    {
        $adminCreated = $this->adminRepository->create($adminDto);
        $organization = $this->organizationRepository->create($organizationDTO, $adminCreated->id);
        dd($organization);
    }
}
