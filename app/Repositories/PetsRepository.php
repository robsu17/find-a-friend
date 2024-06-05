<?php

namespace App\Repositories;

use App\DTO\PetDto;

interface PetsRepository
{
    public function create(PetDto $petDto);
    public function findPetByName(string $name);
}
