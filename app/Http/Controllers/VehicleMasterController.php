<?php

namespace App\Http\Controllers;

use App\Http\Resources\VehicleMasterResource;
use App\Models\VehicleMaster;
use Illuminate\Http\Request;

class VehicleMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$vehicle_masters = VehicleMaster::paginate(10);
        //return VehicleMasterResource::collection($vehicle_masters);
        return VehicleMaster::all();
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
        $vehicle_master = new VehicleMaster();
        $vehicle_master->owner_name = $request->owner_name;
        $vehicle_master->owner_address = $request->owner_address;
        $vehicle_master->owner_email_id = $request->owner_email_id;
        $vehicle_master->owner_mobile_number = $request->owner_mobile_number;

        $vehicle_master->vehicle_number = $request->vehicle_number;
        $vehicle_master->vehicle_plate_no = $request->vehicle_plate_no;
        $vehicle_master->vehicle_state = $request->vehicle_state;
        $vehicle_master->location_id = $request->location_id;

        $vehicle_master->chassis_number = $request->chassis_number;
        $vehicle_master->vehicle_color = $request->vehicle_color;
        $vehicle_master->vehicle_make = $request->vehicle_make;
        $vehicle_master->vehicle_model = $request->vehicle_model;
        $vehicle_master->vehicle_year = $request->vehicle_year;

        $vehicle_master->is_active = $request->is_active;


        if($vehicle_master->save())
        {
            return new VehicleMasterResource($vehicle_master);
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
        return VehicleMaster::findOrFail($id);
        // $vehicle_master = VehicleMaster::findOrFail($id);
        // return new VehicleMasterResource($vehicle_master);
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
        $vehicle_master = VehicleMaster::findOrFail($id);
        $vehicle_master->owner_name = $request->owner_name;
        $vehicle_master->owner_address = $request->owner_address;
        $vehicle_master->owner_email_id = $request->owner_email_id;
        $vehicle_master->owner_mobile_number = $request->owner_mobile_number;

        $vehicle_master->vehicle_number = $request->vehicle_number;
        $vehicle_master->vehicle_plate_no = $request->vehicle_plate_no;
        $vehicle_master->vehicle_state = $request->vehicle_state;
        $vehicle_master->location_id = $request->location_id;

        $vehicle_master->chassis_number = $request->chassis_number;
        $vehicle_master->vehicle_color = $request->vehicle_color;
        $vehicle_master->vehicle_make = $request->vehicle_make;
        $vehicle_master->vehicle_model = $request->vehicle_model;
        $vehicle_master->vehicle_year = $request->vehicle_year;

        $vehicle_master->is_active = $request->is_active;


        if($vehicle_master->save())
        {
            return new VehicleMasterResource($vehicle_master);
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
        $vehicle_master = VehicleMaster::findOrFail($id);

        if($vehicle_master->delete())
        {
            return new VehicleMasterResource($vehicle_master);
        }
    }
}
