<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerAddResource;
use App\Models\CustomerAdd;

use Illuminate\Http\Request;

class CustomerAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer_adds = CustomerAdd::paginate(10);
        return CustomerAddResource::collection($customer_adds);
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
        $customer_add = new CustomerAdd();

        $customer_add->customer_id = $request->customer_id;
        $customer_add->address_type_id = $request->address_type_id;
        $customer_add->country = $request->country;
        $customer_add->state = $request->state;
        $customer_add->city = $request->city;
        $customer_add->locality = $request->locality;
        $customer_add->street = $request->street;

        if($customer_add->save())
        {
            return new CustomerAddResource($customer_add);
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
        $customer_add = CustomerAdd::findOrFail($id);
        return new CustomerAddResource($customer_add);

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
        $customer_add = CustomerAdd::findOrFail($id);
        $customer_add->customer_id = $request->customer_id;
        $customer_add->address_type_id = $request->address_type_id;
        $customer_add->country = $request->country;
        $customer_add->state = $request->state;
        $customer_add->city = $request->city;
        $customer_add->locality = $request->locality;
        $customer_add->street = $request->street;

        if($customer_add->save())
        {
            return new CustomerAddResource($customer_add);
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
        $customer_add = CustomerAdd::findOrFail($id);

        if($customer_add->delete())
        {
            return new CustomerAddResource($customer_add);
        }
    }
}
