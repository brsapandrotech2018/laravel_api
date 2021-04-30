<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupRequestItemResource;
use App\Models\PickupRequestItem;
use Illuminate\Http\Request;

class PickupRequestItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_request_items = PickupRequestItem::paginate(10);
        //return PickupRequestItemResource::collection($pickup_request_items);
        return PickupRequestItem::all();
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
        //['pickup_request_id','item_id','quantity','price','total_price','is_active'];
        $pickup_request_item = new PickupRequestItem();
        $pickup_request_item->pickup_request_id = $request->pickup_request_id;
        $pickup_request_item->item_id = $request->item_id;
       
        $pickup_request_item->quantity = $request->quantity;

        $pickup_request_item->price = $request->price;
        $pickup_request_item->total_price = $request->total_price;

        $pickup_request_item->is_active = $request->is_active;


        if($pickup_request_item->save())
        {
            return new PickupRequestItemResource($pickup_request_item);
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
        return PickupRequestItem::findOrFail($id);
        //$pickup_request_item = PickupRequestItem::findOrFail($id);
        //return new PickupRequestItemResource($pickup_request_item);
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
        $pickup_request_item = PickupRequestItem::findOrFail($id);
        $pickup_request_item->pickup_request_id = $request->pickup_request_id;
        $pickup_request_item->item_id = $request->item_id;
       
        $pickup_request_item->quantity = $request->quantity;

        $pickup_request_item->price = $request->price;
        $pickup_request_item->total_price = $request->total_price;

        $pickup_request_item->is_active = $request->is_active;


        if($pickup_request_item->save())
        {
            return new PickupRequestItemResource($pickup_request_item);
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
        $pickup_request_item = PickupRequestItem::findOrFail($id);

        if($pickup_request_item->delete())
        {
            return new PickupRequestItemResource($pickup_request_item);
        }
    }
}
