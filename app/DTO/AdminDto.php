<?php

namespace App\DTO;

class AdminDto
{
    public string $name;
    public string $email;
    public string $password;

    /**
     * @param string $password
     * @param string $name
     * @param string $email
     */
    public function __construct(string $name, string $email, string $password)
    {
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
    }
}
