<?php

namespace App\Repositories\Ibge;

use App\Repositories\LocalitiesRepository;
use Illuminate\Support\Facades\Http;

class IBGEApiRespository implements LocalitiesRepository
{
    protected string $baseUrl = 'https://servicodados.ibge.gov.br/api/v1/localidades';

    public function getStates()
    {
        return Http::get($this->baseUrl.'/estados')->collect()->map(function ($item) {
            return [
                'id' => $item['id'],
                'sigla' => $item['sigla'],
            ];
        });
    }

    public function getCityByStateName(string $stateName)
    {
        $cities = Http::get($this->baseUrl.'/estados/'.$stateName.'/distritos');
        return $cities->collect()->map(function ($item) {
            return [
                'id' => $item['id'],
                'name' => $item['nome'],
            ];
        });
    }
}
