<?php

namespace Common\Validators;

use Validator;

/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 18:27
 */
abstract class CommonValidator
{
    abstract public function getRules();

    public function validate(array $params)
    {
        return Validator::make($params, $this->getRules());
    }

}

/*
 *
 *
 *
 *        if ($validator->fails()) {
            return redirect(route($this->responseRedirectRoute, $this->responseParams))
                ->withErrors($validator)
                ->withInput();
        }
        return true;
 *
 *
 *    public function getRules() {
        return [
            'title' => ['required'],
            'level' => ['integer'],
            'text' => ['required'],
        ];
    }
 *
 *
 * protected function getRule($type) {
        if($type == 'integer') {
            return [
                'sometimes',
                'integer',
            ];
        } elseif ($type == 'date') {
            return [
                'sometimes',
                'date',
            ];
        }elseif ($type == 'checkbox') {
            return [
                'required',
                'integer',
                'in:0,1',
            ];
        }
        return false;
    }
 *
 * */