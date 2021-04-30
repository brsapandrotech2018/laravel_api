<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupPaymentResource;
use App\Models\PickupPayment;
use Illuminate\Http\Request;

class PickupPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_payments = PickupPayment::paginate(10);
        //return PickupPaymentResource::collection($pickup_payments);
        return PickupPayment::all();
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
        //['pickup_request_id','customer_id','payment_mode','payment_type','amount','cgst','sgst','discount','total','transaction_id','channel_transaction_initiated'];
        $pickup_payment = new PickupPayment();
        $pickup_payment->pickup_request_id = $request->pickup_request_id;
        $pickup_payment->customer_id = $request->customer_id;
       

        $pickup_payment->payment_mode = $request->payment_mode;
        $pickup_payment->payment_type = $request->payment_type;

        $pickup_payment->amount = $request->amount;

        $pickup_payment->cgst = $request->cgst;
        $pickup_payment->sgst = $request->sgst;

        $pickup_payment->discount = $request->discount;
        $pickup_payment->total = $request->total;

        $pickup_payment->transaction_id = $request->transaction_id;
        $pickup_payment->channel_transaction_initiated = $request->channel_transaction_initiated;

        if($pickup_payment->save())
        {
            return new PickupPaymentResource($pickup_payment);
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
        return PickupPayment::findOrFail($id);
        //$pickup_payment = PickupPayment::findOrFail($id);
        //return new PickupPaymentResource($pickup_payment);
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
        $pickup_payment = PickupPayment::findOrFail($id);
        $pickup_payment->pickup_request_id = $request->pickup_request_id;
        $pickup_payment->customer_id = $request->customer_id;
       

        $pickup_payment->payment_mode = $request->payment_mode;
        $pickup_payment->payment_type = $request->payment_type;

        $pickup_payment->amount = $request->amount;

        $pickup_payment->cgst = $request->cgst;
        $pickup_payment->sgst = $request->sgst;

        $pickup_payment->discount = $request->discount;
        $pickup_payment->total = $request->total;

        $pickup_payment->transaction_id = $request->transaction_id;
        $pickup_payment->channel_transaction_initiated = $request->channel_transaction_initiated;

        if($pickup_payment->save())
        {
            return new PickupPaymentResource($pickup_payment);
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
        $pickup_payment = PickupPayment::findOrFail($id);

        if($pickup_payment->delete())
        {
            return new PickupPaymentResource($pickup_payment);
        }
    }
}
