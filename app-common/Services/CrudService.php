<?php

namespace Common\Services;

use Common\Repositories\ICrudRepository;

class CrudService
{

    private $repository;


    public function __construct(ICrudRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        return $this->repository->all();
    }


    public function create()
    {
        return $this->repository->model();
    }


    public function store(array $params)
    {
        $element = $this->repository->model();

        $element->fill($params);

        return $this->repository->save($element);
    }


    public function show($id)
    {
        return $this->repository->findById($id);
    }


    public function edit($id)
    {
        return $this->repository->findById($id);
    }


    public function update($id, array $params)
    {
        $element = $this->repository->findById($id);

        $element->fill($params);

        return $this->repository->save($element);
    }


    public function destroy($id)
    {
        $element = $this->repository->findById($id);

        return $this->repository->delete($element);
    }

}