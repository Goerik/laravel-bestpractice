<?php

namespace Common\Helpers;

use Common\Exceptions\ApiWrongInputException;

class ApiFormatter {

    /**
     * Prepare success response
     * @param $data
     * @return string
     */
    public function getSuccessResult($data) {
        $result = new \stdClass();
        $result->success = true;
        $result->data = $data;

        return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    }


    /**
     * Prepare answer with error message
     * @param $errorText
     * @param $errorCode
     * @throws ApiWrongInputException
     */
    public function throwWrongInputException($errorText, $errorCode) {
        $exception = new ApiWrongInputException($errorText, $errorCode);
        throw $exception;
    }


    /**
     * Parse JSON and check required params
     * @param $plainData
     * @param array $validateKeys
     * @return mixed
     * @throws ApiWrongInputException
     */
    public function decodeJson($plainData, array $validateKeys = []) {
        $data = json_decode($plainData, true);
        if (!is_array($data)) {
            throw new ApiWrongInputException("data is not array");
        }

        foreach ($validateKeys as $key) {
            if (!isset($data[$key])) {
                $this->throwWrongInputException("POST param data must be array with keys " . implode(", ", $validateKeys), 1000);
            }
        }
        return $data;

    }

}