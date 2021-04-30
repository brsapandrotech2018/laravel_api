<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupDriverDetailResource;
use App\Models\PickupDriverDetail;
use Illuminate\Http\Request;

class PickupDriverDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_driver_details = PickupDriverDetail::paginate(10);
        //return PickupDriverDetailResource::collection($pickup_driver_details);
        return PickupDriverDetail::all();
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
        $pickup_driver_detail = new PickupDriverDetail();
        $pickup_driver_detail->pickup_request_id = $request->pickup_request_id;
        $pickup_driver_detail->driver_id = $request->driver_id;
       

        $pickup_driver_detail->is_active = $request->is_active;


        if($pickup_driver_detail->save())
        {
            return new PickupDriverDetailResource($pickup_driver_detail);
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
        return PickupDriverDetail::findOrFail($id);
        //$pickup_driver_detail = PickupDriverDetail::findOrFail($id);
        //return new PickupDriverDetailResource($pickup_driver_detail);
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
        $pickup_driver_detail = PickupDriverDetail::findOrFail($id);
        $pickup_driver_detail->pickup_request_id = $request->pickup_request_id;
        $pickup_driver_detail->driver_id = $request->driver_id;
       

        $pickup_driver_detail->is_active = $request->is_active;


        if($pickup_driver_detail->save())
        {
            return new PickupDriverDetailResource($pickup_driver_detail);
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
        $pickup_driver_detail = PickupDriverDetail::findOrFail($id);

        if($pickup_driver_detail->delete())
        {
            return new PickupDriverDetailResource($pickup_driver_detail);
        }
    }
}
