<?php

namespace App\Repositories;

interface LocalitiesRepository
{
    public function getStates();
    public function getCityByStateName(string $stateName);
}
