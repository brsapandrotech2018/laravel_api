<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserTypeMasterResource;
use App\Models\UserTypeMaster;
use Illuminate\Http\Request;

class UserTypeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_type_masters = UserTypeMaster::paginate(10);
        return UserTypeMasterResource::collection($user_type_masters);
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
        $user_type_master = new UserTypeMaster();
        $user_type_master->user_type = $request->user_type;
        $user_type_master->description = $request->description;

        if($user_type_master->save())
        {
            return new UserTypeMasterResource($user_type_master);
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
        $user_type_master = UserTypeMaster::findOrFail($id);
        return new UserTypeMasterResource($user_type_master);
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
        $user_type_master = UserTypeMaster::findOrFail($id);
        $user_type_master->user_type = $request->user_type;
        $user_type_master->description = $request->description;

        if($user_type_master->save())
        {
            return new UserTypeMasterResource($user_type_master);
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
        $user_type_master = UserTypeMaster::findOrFail($id);

        if($user_type_master->delete())
        {
            return new UserTypeMasterResource($user_type_master);
        }
    }
}
