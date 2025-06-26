<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    public function setPassword(string $pass)
    {
        $this->attributes['userpassword'] = password_hash($pass, PASSWORD_DEFAULT);
        return $this;
    }

    public function setEmail(string $email)
    {
        $this->attributes['useremail'] = $email;
        return $this;
    }
}
