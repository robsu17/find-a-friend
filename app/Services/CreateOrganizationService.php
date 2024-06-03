<?php

namespace App\Services;

use App\DTO\OrganizationDTO;
use App\Models\Organization;
use App\Repositories\OrganizationRepository;

class CreateOrganizationService
{
    public function __construct(private OrganizationRepository $organizationRepository) {}

    public function handle(OrganizationDTO $organizationDTO)
    {
        $organization = $this->organizationRepository->create($organizationDTO);
    }
}
