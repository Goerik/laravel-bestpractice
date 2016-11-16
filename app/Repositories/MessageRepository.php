<?php

namespace App\Repositories;


use App\Models\Message;
use Common\Repositories\Repository;


class MessageRepository extends Repository
{
    public function model()
    {
        return new Message();
    }
}