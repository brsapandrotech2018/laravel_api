<?php

namespace App\Http\Controllers;

use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$warehouses = Warehouse::paginate(10);
        //return WarehouseResource::collection($warehouses);
        return Warehouse::all();
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
        $warehouse = new Warehouse();
        $warehouse->warehouse_name = $request->warehouse_name;
        $warehouse->warehouse_detalls = $request->warehouse_detalls;
       
        $warehouse->location_id = $request->location_id;

        $warehouse->is_active = $request->is_active;


        if($warehouse->save())
        {
            return new WarehouseResource($warehouse);
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
        return Warehouse::findOrFail($id);
        // $warehouse = Warehouse::findOrFail($id);
        // return new WarehouseResource($warehouse);
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
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->warehouse_name = $request->warehouse_name;
        $warehouse->warehouse_detalls = $request->warehouse_detalls;
       
        $warehouse->location_id = $request->location_id;

        $warehouse->is_active = $request->is_active;


        if($warehouse->save())
        {
            return new WarehouseResource($warehouse);
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
        $warehouse = Warehouse::findOrFail($id);

        if($warehouse->delete())
        {
            return new WarehouseResource($warehouse);
        }
    }
}
