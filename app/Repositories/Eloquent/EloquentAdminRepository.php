<?php

namespace App\Repositories\Eloquent;


use App\DTO\AdminDto;
use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Support\Facades\Auth;

class EloquentAdminRepository implements AdminRepository
{

    public function create(AdminDto $adminDto)
    {
        $data = [
            'name' => $adminDto->name,
            'email' => $adminDto->email,
            'password' => bcrypt($adminDto->password),
        ];

        return Admin::create($data);
    }

    public function findByEmail(string $email)
    {
        $user = Admin::where('email', $email)->first();
        return $user;
    }
}
