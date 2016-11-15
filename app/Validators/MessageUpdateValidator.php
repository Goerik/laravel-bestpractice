<?php

namespace App\Validators;

use Common\Validators\CommonValidator;


/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 18:27
 */
class MessageUpdateValidator extends CommonValidator
{
    public function getRules()
    {
        return [
            'message' => ['required'],
        ];
    }


}
