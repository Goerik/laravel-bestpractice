<?php

namespace Common\Validators;


/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 18:27
 */
interface ICommonValidatorFactory
{
    public function getUpdateValidator();

    public function getStoreValidator();

}
