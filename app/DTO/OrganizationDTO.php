<?php

namespace App\DTO;

class OrganizationDTO
{
    public string $name;
    public string $address;
    public string $whatsapp;
    public string $cep;

    /**
     * @param string $name
     * @param string $address
     * @param string $whatsapp
     * @param string $cep
     */
    public function __construct(string $name, string $address, string $whatsapp, string $cep)
    {
        $this->name = $name;
        $this->address = $address;
        $this->whatsapp = $whatsapp;
        $this->cep = $cep;
    }
}
