<?php
/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 16:43
 */

namespace Common\Controllers\Traits;


use Illuminate\Http\Request;

trait JSONCrud
{
    abstract public function viewGroup();

    abstract public function getCrudService();

    abstract public function getValidatorFactory();

    abstract public function getApiAdapter();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = $this->getCrudService()->index();

        return  $this->getApiAdapter()->format($elements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $element = $this->getCrudService()->create();

        return  $this->getApiAdapter()->format($element);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->getApiAdapter()->parse($request);

        $validator = $this->getValidatorFactory()->getStoreValidator()->validate($data);

        if ($validator->fails())
        {
            return  $this->getApiAdapter()->format($validator->errors()->all(), false);
        }

        return  $this->getApiAdapter()->format($this->getCrudService()->store($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = $this->getCrudService()->show($id);

        return  $this->getApiAdapter()->format($element);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = $this->getCrudService()->show($id);

        return  $this->getApiAdapter()->format($element);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->getApiAdapter()->parse($request);

        $validator = $this->getValidatorFactory()->getUpdateValidator()->validate($data);

        if ($validator->fails())
        {
            return  $this->getApiAdapter()->format($validator->errors()->all(), false);
        }

        $result = $this->getCrudService()->update($id, $data);

        return  $this->getApiAdapter()->format($this->getCrudService()->update($id, $data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return  $this->getApiAdapter()->format($this->getCrudService()->destroy($id));
    }

}