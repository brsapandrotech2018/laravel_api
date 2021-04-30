<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryItemResource;
use App\Models\CategoryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = DB::select("CALL getCategories()");
        // echo "<pre>";
        
        
        // $category_item_items = CategoryItem::paginate(10);
        return $categories;
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
        $category_item = new CategoryItem();

        $category_item->category_id = $request->category_id;
        $category_item->unit_id = $request->unit_id;
        $category_item->item_name = $request->item_name;

        $category_item->unit_price = $request->unit_price;

        $category_item->description = $request->description;

        if($category_item->save())
        {
            return new CategoryItemResource($category_item);
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
        $category = DB::select("CALL getCategoriesWithID(".$id.")");
        
        print_r($category);
        
        // $category_item = CategoryItem::findOrFail($id);
        // return new CategoryItemResource($category_item);
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
        // $category = Category::findOrFail($id);
        // $category->type = $request->type;
        // $category->description = $request->description;

        // if($category->save())
        // {
        //     return new CategoryResource($category);
        // }

        $category_item = CategoryItem::findOrFail($id);

        $category_item -> category_id = $request->category_id;
        $category_item -> unit_id = $request->unit_id;
        $category_item -> item_name = $request->item_name;

        $category_item -> unit_price = $request->unit_price;

        $category_item -> description = $request->description;

        if($category_item->save())
        {
            return new CategoryItemResource($category_item);
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
        $category_item = CategoryItem::findOrFail($id);

        if($category_item->delete())
        {
            return new CategoryItemResource($category_item);
        }
    }
}
