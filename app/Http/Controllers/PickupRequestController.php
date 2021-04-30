<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupRequestResource;
use App\Models\PickupRequest;
use Illuminate\Http\Request;

class PickupRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_requests = PickupRequest::paginate(10);
        //return PickupRequestResource::collection($pickup_requests);
        return PickupRequest::all();
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
        //protected $fillable = ['customer_id','pickup_address','location_id','pickup_status','pickup_request_attendedBy'];
        $pickup_request = new PickupRequest();
        $pickup_request->customer_id = $request->customer_id;
        $pickup_request->pickup_address = $request->pickup_address;
       
        $pickup_request->location_id = $request->location_id;

        $pickup_request->pickup_status = $request->pickup_status;
        $pickup_request->pickup_request_attendedBy = $request->pickup_request_attendedBy;


        if($pickup_request->save())
        {
            return new PickupRequestResource($pickup_request);
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
        return PickupRequest::findOrFail($id);
        //$pickup_request = PickupRequest::findOrFail($id);
        //return new PickupRequestResource($pickup_request);
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
        $pickup_request = PickupRequest::findOrFail($id);
        $pickup_request->customer_id = $request->customer_id;
        $pickup_request->pickup_address = $request->pickup_address;
       
        $pickup_request->location_id = $request->location_id;

        $pickup_request->pickup_status = $request->pickup_status;
        $pickup_request->pickup_request_attendedBy = $request->pickup_request_attendedBy;


        if($pickup_request->save())
        {
            return new PickupRequestResource($pickup_request);
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
        $pickup_request = PickupRequest::findOrFail($id);

        if($pickup_request->delete())
        {
            return new PickupRequestResource($pickup_request);
        }
    }
}
