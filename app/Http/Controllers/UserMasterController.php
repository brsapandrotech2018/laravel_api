<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserMasterResource;
use App\Models\UserMaster;
use Illuminate\Http\Request;

class UserMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_masters = UserMaster::paginate(10);
        return UserMasterResource::collection($user_masters);
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
        $user_master = new UserMaster();
        $user_master->user_type_id = $request->user_type_id;
        $user_master->user_display_name = $request->user_display_name;
        $user_master->user_name = $request->user_name;
        $user_master->contact_number = $request->contact_number;
        $user_master->email_id = $request->email_id;

        if($user_master->save())
        {
            return new UserMasterResource($user_master);
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
        $user_master = UserMaster::findOrFail($id);
        return new UserMasterResource($user_master);
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
        $user_master = UserMaster::findOrFail($id);
        $user_master->user_type_id = $request->user_type_id;
        $user_master->user_display_name = $request->user_display_name;
        $user_master->user_name = $request->user_name;
        $user_master->contact_number = $request->contact_number;
        $user_master->email_id = $request->email_id;

        if($user_master->save())
        {
            return new UserMasterResource($user_master);
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
        $user_master = UserMaster::findOrFail($id);

        if($user_master->delete())
        {
            return new UserMasterResource($user_master);
        }
    }
}
