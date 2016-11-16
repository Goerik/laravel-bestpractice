<?php

namespace App\Http\Controllers\Frontend;

use App\Factories\CrudFactory;
use App\Factories\MessageValidatorsFactory;
use App\Http\Controllers\Controller;
use Common\Controllers\ICrudController;
use Common\Controllers\Traits\CommonCrud;
use Common\Services\ICrudService;

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

    public function __construct(ICrudService $crudService, MessageValidatorsFactory $messageValidatorsFactory)
    {
        $this->crudService = $crudService;
        $this->messageValidatorsFactory = $messageValidatorsFactory;
    }


}
