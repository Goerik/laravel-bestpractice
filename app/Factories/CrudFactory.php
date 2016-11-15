<?php
/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 16:18
 */

namespace App\Factories;


use App\Repositories\MessageRepository;
use App\Repositories\UserRepository;
use Common\Services\CrudService;

class CrudFactory
{

    public function getUserCrudService()
    {
       return new CrudService(new UserRepository());
    }

    public function getMessageCrudService()
    {
       return new CrudService(new MessageRepository());
    }
}