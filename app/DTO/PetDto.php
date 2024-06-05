<?php

namespace App\DTO;

use App\Enum\PetAge;
use App\Enum\PetAmbience;
use App\Enum\PetDependency;
use App\Enum\PetEnergy;
use App\Enum\PetSize;

class PetDto
{
    public string $name;
    public string $about;
    public array $photos;
    public PetAge $age;
    public PetSize $size;
    public PetEnergy $energy;
    public PetDependency $dependency;
    public PetAmbience $ambience;
    public array $requirements;

    /**
     * @param string $name
     * @param string $about
     * @param array $requirements
     * @param PetAge $age
     * @param PetSize $size
     * @param PetDependency $dependency
     * @param PetEnergy $energy
     * @param PetAmbience $ambience
     */
    public function __construct(string $name, string $about, array $photos, array $requirements, PetAge $age, PetSize $size, PetDependency $dependency, PetEnergy $energy, PetAmbience $ambience)
    {
        $this->name = $name;
        $this->about = $about;
        $this->photos = $photos;
        $this->age = $age;
        $this->size = $size;
        $this->dependency = $dependency;
        $this->energy = $energy;
        $this->ambience = $ambience;
        $this->requirements = $requirements;
    }
}
