<?php

namespace Common\Services;


interface ICrudService
{

    public function index();

    public function create();

    public function store(array $params);

    public function show($id);

    public function edit($id);

    public function update($id, array $params);

    public function destroy($id);

}