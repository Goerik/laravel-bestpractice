<?php

namespace App\Validators;

use Common\Validators\CommonValidator;


/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 18:27
 */
class MessageStoreValidator extends CommonValidator
{
    public function getRules()
    {
        return [
            'message' => ['required'],
            'from_user_id' => ['required'],
            'to_user_id' => ['required'],
        ];
    }
}
