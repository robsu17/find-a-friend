<?php

namespace App\Services\errors;

class PetAlreadyExistError extends \Exception
{
    public function __construct()
    {
        parent::__construct('Pet já foi adicionado.');
    }
}
