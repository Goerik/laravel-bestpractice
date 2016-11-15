<?php

namespace Common\Controllers;

interface ICrudController
{
    public function viewGroup();

    public function getCrudService();

    public function getValidatorFactory();

}