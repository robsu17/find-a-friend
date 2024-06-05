<?php

namespace App\Repositories\Eloquent;

use App\DTO\PetDto;
use App\Models\Admin;
use App\Models\Organization;
use App\Models\Pet;
use App\Repositories\PetsRepository;
use Illuminate\Support\Facades\Auth;

class EloquentPetRepository implements PetsRepository {

    public function create(PetDto $petDto)
    {
        $organization = Organization::where('adminId', Auth::id())->first();

        $data = [
            'name' => $petDto->name,
            'age' => $petDto->age->name,
            'about' => $petDto->about,
            'requirements' => json_encode($petDto->requirements),
            'size' => $petDto->size->name,
            'energy' => $petDto->energy->name,
            'dependency' => $petDto->dependency->name,
            'ambience' => $petDto->ambience->name,
            'photos' => json_encode($petDto->photos),
            'org_id' => $organization->id,
        ];

        return Pet::create($data);
    }

    public function findPetByName(string $name)
    {
        $orgId = Organization::where('adminId', Auth::id())->first()->id;
        $pet = Pet::where('name', $name)->where('org_id', $orgId)->first();
        return $pet;
    }

}
