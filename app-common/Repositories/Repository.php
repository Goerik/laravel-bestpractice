<?php

namespace Common\Repositories;


abstract class Repository implements  ICrudRepository
{

    abstract public function model();

    public function all(){
        return $this->model()->all();
    }

    public function findById($id) {
        return $this->model()->find($id);
    }

    public function firstByParamsOrFail(array $params){
        return $this->where($params)->firstOrFail();
    }

    public function where(array $params){
        return $this->model()->where($params);
    }

    public function save($model) {
        return $model->save();
    }

    public function delete($model) {
        return $model->delete();
    }
}