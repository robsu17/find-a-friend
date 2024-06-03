<?php

namespace App\Repositories;

use App\DTO\AdminDto;

interface AdminRepository
{
    public function create(AdminDto $adminDto);
    public function findByEmail(string $email);
}
