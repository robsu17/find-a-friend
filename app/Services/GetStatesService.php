<?php

namespace App\Services;

use App\Repositories\Ibge\IBGEApiRespository;
use App\Repositories\LocalitiesRepository;

class GetStatesService
{
    public function __construct(protected LocalitiesRepository $localitiesRepository)
    {
        $this->localitiesRepository = new IBGEApiRespository();
    }

    public function handle()
    {
        return $this->localitiesRepository->getStates();
    }
}
