<?php

namespace Common\Exceptions;

use Exception;

class ApiWrongInputException extends Exception {

    public function getApiObject() {
        $result = new \stdClass();
        $result->success = false;
        $result->errorCode = $this->code;
        $result->errorText = $this->message;

        return $result;
    }

}
