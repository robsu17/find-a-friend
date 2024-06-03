<?php

namespace App\Services\errors;

class InvalidCredentialsError extends \Exception
{
    public function __construct()
    {
        parent::__construct('Credênciais inválidas.');
    }
}
