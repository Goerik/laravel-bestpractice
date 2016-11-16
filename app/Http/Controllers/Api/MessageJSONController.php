<?php

namespace App\Http\Controllers\Api;

use App\Factories\CrudFactory;
use App\Factories\MessageValidatorsFactory;
use App\Http\Controllers\Controller;
use Common\Controllers\ICrudController;
use Common\Controllers\Traits\JSONCrud;
use Common\Helpers\ApiFormatter;

class MessageJSONController extends Controller implements ICrudController
{
    use JSONCrud;

    private $crudService;
    private $messageValidatorsFactory;

    public function viewGroup()
    {
        return 'message';
    }

    public function getCrudService()
    {
        return $this->crudService;
    }

    public function getValidatorFactory()
    {
        return $this->messageValidatorsFactory;
    }


    public function getApiAdapter() {
        return new ApiFormatter();
    }

    public function __construct(CrudFactory $crudFactory, MessageValidatorsFactory $messageValidatorsFactory)
    {
        $this->crudService = $crudFactory->getMessageCrudService();
        $this->messageValidatorsFactory = $messageValidatorsFactory;
    }


}

