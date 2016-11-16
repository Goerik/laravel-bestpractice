<?php

namespace Common\Helpers;

use Common\Exceptions\ApiWrongInputException;
use Illuminate\Http\Request;

class ApiFormatter {

    /**
     * Prepare success response
     * @param $data
     * @return string
     */
    public function format($data, $success = true) {
        $result = new \stdClass();
        $result->success = $success;
        $result->data = $data;

        return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Parse JSON and check required params
     * @param Request $request
     * @return mixed
     */
    public function parse(Request $request) {
        $data = json_decode($request->get("data"), true);
        return $data;
    }

}