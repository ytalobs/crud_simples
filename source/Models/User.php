<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{


    public function __construct()
    {
        parent::__construct("users", ["id", "first_name", "last_name"]);
    }

    /**
     * @return Address|null
     */
    public function address(): ?Address
    {
        return (new Address())->find("user_id = :user_id", "user_id={$this->id}")->fetch();
    }

}