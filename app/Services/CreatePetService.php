<?php

namespace App\Services;

use App\DTO\PetDto;
use App\Repositories\PetsRepository;

class CreatePetService
{
    public function __construct(private readonly PetsRepository $petsRepository) {}

    public function handle(PetDto $petDto, mixed $organizationId)
    {
        $pet = $this->petsRepository->create($petDto, $organizationId);
    }
}
