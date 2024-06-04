<?php

namespace App\Services;

use App\Models\Organization;
use App\Repositories\OrganizationRepository;
use App\Services\errors\ResourceNotFound;

class GetOrganization
{
    public function __construct(private readonly OrganizationRepository $organizationRepository)
    {
    }

    /**
     * @throws ResourceNotFound
     */
    public function handle(mixed $adminId): Organization
    {
        $organization = $this->organizationRepository->getOrganizationByAdminId($adminId);

        if (is_null($organization)) {
            throw new ResourceNotFound();
        }

        return $organization;
    }
}
