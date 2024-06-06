<?php

namespace App\DTO\Factories;

use App\DTO\PetDto;
use App\Enum\PetAge;
use App\Enum\PetAmbience;
use App\Enum\PetDependency;
use App\Enum\PetEnergy;
use App\Enum\PetSize;

class PetDtoFactory
{
    public function createFromRequest(array $requestData): PetDto
    {
        $requirements = $this->parseRequirements($requestData['requirement_values']);

        return new PetDto(
            $requestData['name'],
            $requestData['about'],
            $requestData['photos'],
            $requirements,
            $this->getPetAge($requestData['age']),
            $this->getPetSize($requestData['size']),
            $this->getPetDependency($requestData['dependency']),
            $this->getPetEnergy($requestData['energy']),
            $this->getPetAmbience($requestData['ambience']),
        );
    }

    private function parseRequirements(string $requirementValues): array
    {
        return explode(',', $requirementValues);
    }

    private function getPetAge(string $age): PetAge
    {
        return match ($age) {
            'filhote' => PetAge::Filhote,
            'jovem' => PetAge::Jovem,
            'adulto' => PetAge::Adulto,
        };
    }

    private function getPetSize(string $size): PetSize
    {
        return match ($size) {
            'pequeno' => PetSize::Pequeno,
            'medio' => PetSize::Medio,
            'grande' => PetSize::Grande,
        };
    }

    private function getPetDependency(string $dependency): PetDependency
    {
        return match ($dependency) {
            'baixo' => PetDependency::Baixo,
            'medio' => PetDependency::Medio,
            'alto' => PetDependency::Alto,
        };
    }

    private function getPetEnergy(string $energy): PetEnergy
    {
        return match ($energy) {
            'baixo' => PetEnergy::Baixo,
            'medio' => PetEnergy::Medio,
            'alto' => PetEnergy::Alto,
        };
    }

    private function getPetAmbience(string $ambience): PetAmbience
    {
        return match ($ambience) {
            'pequeno' => PetAmbience::Pequeno,
            'medio' => PetAmbience::Medio,
            'largo' => PetAmbience::Amplo,
        };
    }
}
