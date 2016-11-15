<?php

namespace App\Repositories;

use App\Message;
use App\Models\User;
use Common\Repositories\Repository;


class MessageRepository extends Repository
{
    public function model()
    {
        return new Message();
    }
}