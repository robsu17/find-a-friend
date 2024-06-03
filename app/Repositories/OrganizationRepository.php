<?php

namespace App\Repositories;

use App\DTO\OrganizationDTO;

interface OrganizationRepository
{
    public function create(OrganizationDTO $organizationDTO, string $adminId);
}
