<?php

namespace App\Http\Controllers;

use App\Http\Resources\OperatorMasterResource;
use App\Models\OperatorMaster;
use Illuminate\Http\Request;

class OperatorMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$operator_masters = OperatorMaster::paginate(10);
        //return OperatorMasterResource::collection($operator_masters);
        return OperatorMaster::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $operator_master = new OperatorMaster();
        $operator_master->operator_name = $request->operator_name;
        $operator_master->operator_address = $request->operator_address;
       
        $operator_master->location_id = $request->location_id;

        $operator_master->is_active = $request->is_active;


        if($operator_master->save())
        {
            return new OperatorMasterResource($operator_master);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return OperatorMaster::findOrFail($id);
        // $operator_master = OperatorMaster::findOrFail($id);
        // return new OperatorMasterResource($operator_master);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $operator_master = OperatorMaster::findOrFail($id);
        $operator_master->operator_name = $request->operator_name;
        $operator_master->operator_address = $request->operator_address;
       
        $operator_master->location_id = $request->location_id;

        $operator_master->is_active = $request->is_active;


        if($operator_master->save())
        {
            return new OperatorMasterResource($operator_master);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $operator_master = OperatorMaster::findOrFail($id);

        if($operator_master->delete())
        {
            return new OperatorMasterResource($operator_master);
        }
    }
}
