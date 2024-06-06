<?php

namespace App\Services;

use App\Repositories\Ibge\IBGEApiRespository;
use App\Repositories\LocalitiesRepository;

class GetCitiesServices
{
    public function __construct(protected LocalitiesRepository $localitiesRepository)
    {
        $this->localitiesRepository = new IBGEApiRespository();
    }

    public function handle(string $state)
    {
        return $this->localitiesRepository->getCityByStateName($state);
    }
}
