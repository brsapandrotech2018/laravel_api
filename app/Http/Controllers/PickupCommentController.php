<?php

namespace App\Http\Controllers;

use App\Http\Resources\PickupCommentResource;
use App\Models\PickupComment;
use Illuminate\Http\Request;

class PickupCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pickup_comments = PickupComment::paginate(10);
        //return PickupCommentResource::collection($pickup_comments);
        return PickupComment::all();
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
        $pickup_comment = new PickupComment();
        $pickup_comment->comment = $request->comment;
        $pickup_comment->public_viewable = $request->public_viewable;
       

        $pickup_comment->created_by = $request->created_by;


        if($pickup_comment->save())
        {
            return new PickupCommentResource($pickup_comment);
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
        return PickupComment::findOrFail($id);
        //$pickup_comment = PickupComment::findOrFail($id);
        //return new PickupCommentResource($pickup_comment);
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
        $pickup_comment = PickupComment::findOrFail($id);
        $pickup_comment->comment = $request->comment;
        $pickup_comment->public_viewable = $request->public_viewable;
       

        $pickup_comment->created_by = $request->created_by;


        if($pickup_comment->save())
        {
            return new PickupCommentResource($pickup_comment);
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
        $pickup_comment = PickupComment::findOrFail($id);

        if($pickup_comment->delete())
        {
            return new PickupCommentResource($pickup_comment);
        }
    }
}
