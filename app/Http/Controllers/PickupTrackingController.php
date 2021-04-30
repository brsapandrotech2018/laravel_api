<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupTrackingResource;
use App\Models\PickupTracking;
use Illuminate\Http\Request;

class PickupTrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_trackings = PickupTracking::paginate(10);
        //return PickupTrackingResource::collection($pickup_trackings);
        return PickupTracking::all();
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
        //['pickup_request_id','status_id','driver_id','vehicle_id','location_id','is_accepted'];
        $pickup_tracking = new PickupTracking();
        $pickup_tracking->pickup_request_id = $request->pickup_request_id;
        $pickup_tracking->status_id = $request->status_id;
        $pickup_tracking->driver_id = $request->driver_id;

        $pickup_tracking->vehicle_id = $request->vehicle_id;

        $pickup_tracking->location_id = $request->location_id;
       

        $pickup_tracking->is_accepted = $request->is_accepted;


        if($pickup_tracking->save())
        {
            return new PickupTrackingResource($pickup_tracking);
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
        return PickupTracking::findOrFail($id);
        //$pickup_tracking = PickupTracking::findOrFail($id);
        //return new PickupTrackingResource($pickup_tracking);
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
        $pickup_tracking = PickupTracking::findOrFail($id);
        $pickup_tracking->pickup_request_id = $request->pickup_request_id;
        $pickup_tracking->status_id = $request->status_id;
        $pickup_tracking->driver_id = $request->driver_id;

        $pickup_tracking->vehicle_id = $request->vehicle_id;

        $pickup_tracking->location_id = $request->location_id;
       

        $pickup_tracking->is_accepted = $request->is_accepted;


        if($pickup_tracking->save())
        {
            return new PickupTrackingResource($pickup_tracking);
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
        $pickup_tracking = PickupTracking::findOrFail($id);

        if($pickup_tracking->delete())
        {
            return new PickupTrackingResource($pickup_tracking);
        }
    }
}
