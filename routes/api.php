<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CategoryItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerAddController;

use App\Http\Controllers\UserMasterController;
use App\Http\Controllers\UserTypeMasterController;


use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// ******************* Register ***********************
Route::post('/register',[AuthController::class,'register']);

// ******************* Login ***********************
Route::post('/login',[AuthController::class,'login']);


Route::group(['middleware' =>['auth:sanctum']],function(){

    
// ******************* Category ***********************
Route::get('/category',[CategoryController::class,'index']);

Route::post('/category',[CategoryController::class,'store']);

Route::get('/category/{id}',[CategoryController::class,'show']);

Route::put('/category/{id}',[CategoryController::class,'update']);

Route::delete('/category/{id}',[CategoryController::class,'destroy']);


// ******************* CategoryItem ***********************
Route::get('/category_item',[CategoryItemController::class,'index']);

Route::post('/category_item',[CategoryItemController::class,'store']);

Route::get('/category_item/{id}',[CategoryItemController::class,'show']);

Route::put('/category_item/{id}',[CategoryItemController::class,'update']);

Route::delete('/category_item/{id}',[CategoryItemController::class,'destroy']);


// ******************* Customer ***********************
Route::get('/customer',[CustomerController::class,'index']);

Route::post('/customer',[CustomerController::class,'store']);

Route::get('/customer/{id}',[CustomerController::class,'show']);

Route::put('/customer/{id}',[CustomerController::class,'update']);

Route::delete('/customer/{id}',[CustomerController::class,'destroy']);


// ******************* Customer Address ***********************
Route::get('/customer_add',[CustomerAddController::class,'index']);

Route::post('/customer_add',[CustomerAddController::class,'store']);

Route::get('/customer_add/{id}',[CustomerAddController::class,'show']);

Route::put('/customer_add/{id}',[CustomerAddController::class,'update']);

Route::delete('/customer_add/{id}',[CustomerAddController::class,'destroy']);


// ******************* Unit ***********************
Route::get('/unit',[UnitController::class,'index']);

Route::post('/unit',[UnitController::class,'store']);

Route::get('/unit/{id}',[UnitController::class,'show']);

Route::put('/unit/{id}',[UnitController::class,'update']);

Route::delete('/unit/{id}',[UnitController::class,'destroy']);


// ******************* User Master ***********************
Route::get('/user_master',[UserMasterController::class,'index']);

Route::post('/user_master',[UserMasterController::class,'store']);

Route::get('/user_master/{id}',[UserMasterController::class,'show']);

Route::put('/user_master/{id}',[UserMasterController::class,'update']);

Route::delete('/user_master/{id}',[UserMasterController::class,'destroy']);



// ******************* User Type Master ***********************
Route::get('/user_type',[UserTypeMasterController::class,'index']);

Route::post('/user_type',[UserTypeMasterController::class,'store']);

Route::get('/user_type/{id}',[UserTypeMasterController::class,'show']);

Route::put('/user_type/{id}',[UserTypeMasterController::class,'update']);

Route::delete('/user_type/{id}',[UserTypeMasterController::class,'destroy']);


// ******************* Logout ***********************
Route::post('/logout',[AuthController::class,'logout']);

});