<?php
/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 15:44
 */

namespace Common\Repositories;


interface ICrudRepository
{
    public function model();

    public function all();

    public function findById($id);

    public function firstByParamsOrFail(array $params);

    public function where(array $params);

    public function save($model);

    public function delete($model);

}