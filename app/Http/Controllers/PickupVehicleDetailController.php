<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupVehicleDetailResource;
use App\Models\PickupVehicleDetail;
use Illuminate\Http\Request;

class PickupVehicleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_vehicle_details = PickupVehicleDetail::paginate(10);
        //return PickupVehicleDetailResource::collection($pickup_vehicle_details);
        return PickupVehicleDetail::all();
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
        //['pickup_request_id','vehicle_id','is_active'];
        $pickup_vehicle_detail = new PickupVehicleDetail();
        $pickup_vehicle_detail->pickup_request_id = $request->pickup_request_id;
        $pickup_vehicle_detail->vehicle_id = $request->vehicle_id;
       

        $pickup_vehicle_detail->is_active = $request->is_active;


        if($pickup_vehicle_detail->save())
        {
            return new PickupVehicleDetailResource($pickup_vehicle_detail);
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
        return PickupVehicleDetail::findOrFail($id);
        //$pickup_vehicle_detail = PickupVehicleDetail::findOrFail($id);
        //return new PickupVehicleDetailResource($pickup_vehicle_detail);
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
        $pickup_vehicle_detail = PickupVehicleDetail::findOrFail($id);
        $pickup_vehicle_detail->pickup_request_id = $request->pickup_request_id;
        $pickup_vehicle_detail->vehicle_id = $request->vehicle_id;
       

        $pickup_vehicle_detail->is_active = $request->is_active;


        if($pickup_vehicle_detail->save())
        {
            return new PickupVehicleDetailResource($pickup_vehicle_detail);
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
        $pickup_vehicle_detail = PickupVehicleDetail::findOrFail($id);

        if($pickup_vehicle_detail->delete())
        {
            return new PickupVehicleDetailResource($pickup_vehicle_detail);
        }
    }
}
