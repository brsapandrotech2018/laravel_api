<?php

namespace App\Http\Controllers;

use App\Http\Resources\DriverMasterResource;
use App\Models\DriverMaster;
use Illuminate\Http\Request;

class DriverMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$driver_masters = DriverMaster::paginate(10);
        //return DriverMasterResource::collection($driver_masters);
        return DriverMaster::all();
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
        
        $driver_master = new DriverMaster();
        $driver_master->driver_name = $request->driver_name;
        $driver_master->driver_email_id = $request->driver_email_id;

        $driver_master->driver_mobile_number1 = $request->driver_mobile_number1;
        $driver_master->driver_mobile_number2 = $request->driver_mobile_number2;

        $driver_master->driver_address = $request->driver_address;
        $driver_master->driver_pan_number = $request->driver_pan_number;

        $driver_master->vehicle_state = $request->vehicle_state;
        $driver_master->location_id = $request->location_id;

       
        $driver_master->is_active = $request->is_active;


        if($driver_master->save())
        {
            return new DriverMasterResource($driver_master);
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
        return DriverMaster::findOrFail($id);
        // $driver_master = DriverMaster::findOrFail($id);
        // return new DriverMasterResource($driver_master);
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
        
        $driver_master = DriverMaster::findOrFail($id);
        $driver_master->driver_name = $request->driver_name;
        $driver_master->driver_email_id = $request->driver_email_id;

        $driver_master->driver_mobile_number1 = $request->driver_mobile_number1;
        $driver_master->driver_mobile_number2 = $request->driver_mobile_number2;

        $driver_master->driver_address = $request->driver_address;
        $driver_master->driver_pan_number = $request->driver_pan_number;

        $driver_master->vehicle_state = $request->vehicle_state;
        $driver_master->location_id = $request->location_id;

       
        $driver_master->is_active = $request->is_active;


        if($driver_master->save())
        {
            return new DriverMasterResource($driver_master);
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
        $driver_master = DriverMaster::findOrFail($id);

        if($driver_master->delete())
        {
            return new DriverMasterResource($driver_master);
        }
    }
}
