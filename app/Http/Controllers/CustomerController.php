<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::paginate(10);
        return CustomerResource::collection($customers);
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
        $customer = new Customer();

        $customer->customer_id = $request->customer_id;
        $customer->mobile_number = $request->mobile_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->user_type_id = $request->user_type_id;
        $customer->email_id = $request->email_id;

        if($customer->save())
        {
            return new CustomerResource($customer);
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
        $customer = Customer::findOrFail($id);
        return new CustomerResource($customer);
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
        $customer = Customer::findOrFail($id);

        $customer->customer_id = $request->customer_id;
        $customer->mobile_number = $request->mobile_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->user_type_id = $request->user_type_id;
        $customer->email_id = $request->email_id;

        if($customer->save())
        {
            return new CustomerResource($customer);
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
        $customer = Customer::findOrFail($id);

        if($customer->delete())
        {
            return new CustomerResource($customer);
        }
    }
}
