<?php

namespace App\Repositories\Eloquent;

use App\DTO\OrganizationDTO;
use App\Models\Organization;
use App\Repositories\OrganizationRepository;
use Illuminate\Support\Facades\Auth;

class EloquentOrganizationRepository implements OrganizationRepository
{

    public function create(OrganizationDTO $organizationDTO)
    {
        $data = [
            'name' => $organizationDTO->name,
            'address' => $organizationDTO->address,
            'cep' => $organizationDTO->cep,
            'whatsapp' => $organizationDTO->whatsapp,
            'adminId' => Auth::id()
        ];

        return Organization::create($data);
    }
}