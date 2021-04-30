<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationMasterResource;
use App\Models\LocationMaster;
use Illuminate\Http\Request;

class LocationMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$location_masters = LocationMaster::paginate(10);
        //return LocationMasterResource::collection($location_masters);
        return LocationMaster::all();
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
        $location_master = new LocationMaster();
        $location_master->location_name = $request->location_name;
        $location_master->location_details = $request->location_details;
        $location_master->state_id = $request->state_id;
        $location_master->country_id = $request->country_id;
        $location_master->is_active = $request->is_active;

        if($location_master->save())
        {
            return new LocationMasterResource($location_master);
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
        return LocationMaster::findOrFail($id);
        // $location_master = LocationMaster::findOrFail($id);
        // return new LocationMasterResource($location_master);
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
        $location_master = LocationMaster::findOrFail($id);
        $location_master->location_name = $request->location_name;
        $location_master->location_details = $request->location_details;
        $location_master->state_id = $request->state_id;
        $location_master->country_id = $request->country_id;
        $location_master->is_active = $request->is_active;

        if($location_master->save())
        {
            return new LocationMasterResource($location_master);
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
        $location_master = LocationMaster::findOrFail($id);

        if($location_master->delete())
        {
            return new LocationMasterResource($location_master);
        }
    }
}
