<?php

namespace App\Repositories;

use App\Models\User;
use Common\Repositories\Repository;


class UserRepository extends Repository
{
    public function model()
    {
        return new User();
    }
}