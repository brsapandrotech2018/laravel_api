<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupStatusResource;
use App\Models\PickupStatus;
use Illuminate\Http\Request;

class PickupStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_statuses = PickupStatus::paginate(10);
        //return PickupStatusResource::collection($pickup_statuses);
        return PickupStatus::all();
        
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
        $pickup_status = new PickupStatus();
        $pickup_status->status_name = $request->status_name;
        $pickup_status->description = $request->description;
        
        $pickup_status->is_active = $request->is_active;


        if($pickup_status->save())
        {
            return new PickupStatusResource($pickup_status);
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
        return PickupStatus::findOrFail($id);
        //$pickup_status = PickupStatus::findOrFail($id);
        //return new PickupStatusResource($pickup_status);
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
        $pickup_status = PickupStatus::findOrFail($id);
        $pickup_status->status_name = $request->status_name;
        $pickup_status->description = $request->description;
        
        $pickup_status->is_active = $request->is_active;


        if($pickup_status->save())
        {
            return new PickupStatusResource($pickup_status);
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
        $pickup_status = PickupStatus::findOrFail($id);

        if($pickup_status->delete())
        {
            return new PickupStatusResource($pickup_status);
        }
    }
}
