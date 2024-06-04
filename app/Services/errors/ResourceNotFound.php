<?php

namespace App\Services\errors;

class ResourceNotFound extends \Exception
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
