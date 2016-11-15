<?php
/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 16:18
 */

namespace App\Factories;

use App\Validators\MessageStoreValidator;
use App\Validators\MessageUpdateValidator;


class MessageValidatorsFactory
{
    public function getUpdateValidator()
    {
        return new MessageUpdateValidator();
    }

    public function getStoreValidator()
    {
        return new MessageStoreValidator();
    }
}