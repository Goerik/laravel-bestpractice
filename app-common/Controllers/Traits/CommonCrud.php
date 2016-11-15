<?php
/**
 * Created by Albert Umerov.
 * Date: 15.11.16
 * Time: 16:43
 */

namespace Common\Controllers\Traits;


use Illuminate\Http\Request;

trait CommonCrud
{
    abstract public function viewGroup();

    abstract public function getCrudService();

    abstract public function getValidatorFactory();

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->viewGroup() . '.index',
            [
                'elements' => $this->getCrudService()->index()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewGroup() . '.create',
            [
                'element' => $this->getCrudService()->create()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->getValidatorFactory()->getStoreValidator()->validate($request->all());

        if ($validator->fails())
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $this->getCrudService()->store($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view($this->viewGroup() . '.show',
            [
                'element' => $this->getCrudService()->show($id)
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view($this->viewGroup() . '.edit',
            [
                'element' => $this->getCrudService()->edit($id)
            ]);
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
        $validator = $this->getValidatorFactory()->getUpdateValidator()->validate($request->all());

        if ($validator->fails())
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $this->getCrudService()->update($id, $request->all());

        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->getCrudService()->destroy($id);
        return $this->index();
    }

}