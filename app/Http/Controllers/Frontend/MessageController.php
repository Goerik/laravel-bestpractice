<?php

namespace App\Http\Controllers\Frontend;

use App\Factories\CrudFactory;
use App\Factories\MessageValidatorsFactory;
use App\Http\Controllers\Controller;
use Common\Controllers\ICrudController;
use Common\Controllers\Traits\CommonCrud;

class MessageController extends Controller implements ICrudController
{
    use CommonCrud;

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

    public function __construct(CrudFactory $crudFactory, MessageValidatorsFactory $messageValidatorsFactory)
    {
        $this->crudService = $crudFactory->getMessageCrudService();
        $this->messageValidatorsFactory = $messageValidatorsFactory;
    }


}
