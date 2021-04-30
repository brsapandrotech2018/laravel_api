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

use App\Http\Controllers\LocationMasterController;
use App\Http\Controllers\VehicleMasterController;
use App\Http\Controllers\DriverMasterController;
use App\Http\Controllers\OperatorMasterController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\PickupRequestController;
use App\Http\Controllers\PickupRequestItemController;
use App\Http\Controllers\PickupVehicleDetailController;
use App\Http\Controllers\PickupDriverDetailController;
use App\Http\Controllers\PickupStatusController;
use App\Http\Controllers\PickupPaymentController;
use App\Http\Controllers\PickupCommentController;
use App\Http\Controllers\PickupTrackingController;

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


// ******************* Location Master ***********************
Route::get('/location_master',[LocationMasterController::class,'index']);

Route::post('/location_master',[LocationMasterController::class,'store']);

Route::get('/location_master/{id}',[LocationMasterController::class,'show']);

Route::put('/location_master/{id}',[LocationMasterController::class,'update']);

Route::delete('/location_master/{id}',[LocationMasterController::class,'destroy']);



// ******************* Vehicle Master ***********************
Route::get('/vehicle_master',[VehicleMasterController::class,'index']);

Route::post('/vehicle_master',[VehicleMasterController::class,'store']);

Route::get('/vehicle_master/{id}',[VehicleMasterController::class,'show']);

Route::put('/vehicle_master/{id}',[VehicleMasterController::class,'update']);

Route::delete('/vehicle_master/{id}',[VehicleMasterController::class,'destroy']);


// ******************* Driver Master ***********************
Route::get('/driver_master',[DriverMasterController::class,'index']);

Route::post('/driver_master',[DriverMasterController::class,'store']);

Route::get('/driver_master/{id}',[DriverMasterController::class,'show']);

Route::put('/driver_master/{id}',[DriverMasterController::class,'update']);

Route::delete('/driver_master/{id}',[DriverMasterController::class,'destroy']);


// ******************* Operator Master ***********************
Route::get('/operator_master',[OperatorMasterController::class,'index']);

Route::post('/operator_master',[OperatorMasterController::class,'store']);

Route::get('/operator_master/{id}',[OperatorMasterController::class,'show']);

Route::put('/operator_master/{id}',[OperatorMasterController::class,'update']);

Route::delete('/operator_master/{id}',[OperatorMasterController::class,'destroy']);


// ******************* Warehouse ***********************
Route::get('/warehouse',[WarehouseController::class,'index']);

Route::post('/warehouse',[WarehouseController::class,'store']);

Route::get('/warehouse/{id}',[WarehouseController::class,'show']);

Route::put('/warehouse/{id}',[WarehouseController::class,'update']);

Route::delete('/warehouse/{id}',[WarehouseController::class,'destroy']);


// ******************* Pickup Request ***********************
Route::get('/pickup_request',[PickupRequestController::class,'index']);

Route::post('/pickup_request',[PickupRequestController::class,'store']);

Route::get('/pickup_request/{id}',[PickupRequestController::class,'show']);

Route::put('/pickup_request/{id}',[PickupRequestController::class,'update']);

Route::delete('/pickup_request/{id}',[PickupRequestController::class,'destroy']);


// ******************* Pickup Request Item ***********************
Route::get('/pickup_request_item',[PickupRequestItemController::class,'index']);

Route::post('/pickup_request_item',[PickupRequestItemController::class,'store']);

Route::get('/pickup_request_item/{id}',[PickupRequestItemController::class,'show']);

Route::put('/pickup_request_item/{id}',[PickupRequestItemController::class,'update']);

Route::delete('/pickup_request_item/{id}',[PickupRequestItemController::class,'destroy']);


// ******************* Pickup Vehicle Detail  ***********************
Route::get('/pickup_vehicle_detail',[PickupVehicleDetailController::class,'index']);

Route::post('/pickup_vehicle_detail',[PickupVehicleDetailController::class,'store']);

Route::get('/pickup_vehicle_detail/{id}',[PickupVehicleDetailController::class,'show']);

Route::put('/pickup_vehicle_detail/{id}',[PickupVehicleDetailController::class,'update']);

Route::delete('/pickup_vehicle_detail/{id}',[PickupVehicleDetailController::class,'destroy']);


// ******************* Pickup Driver Detail  ***********************
Route::get('/pickup_driver_detail',[PickupDriverDetailController::class,'index']);

Route::post('/pickup_driver_detail',[PickupDriverDetailController::class,'store']);

Route::get('/pickup_driver_detail/{id}',[PickupDriverDetailController::class,'show']);

Route::put('/pickup_driver_detail/{id}',[PickupDriverDetailController::class,'update']);

Route::delete('/pickup_driver_detail/{id}',[PickupDriverDetailController::class,'destroy']);


// ******************* Pickup Status  ***********************
Route::get('/pickup_status',[PickupStatusController::class,'index']);

Route::post('/pickup_status',[PickupStatusController::class,'store']);

Route::get('/pickup_status/{id}',[PickupStatusController::class,'show']);

Route::put('/pickup_status/{id}',[PickupStatusController::class,'update']);

Route::delete('/pickup_status/{id}',[PickupStatusController::class,'destroy']);


// ******************* Pickup Payment  ***********************
Route::get('/pickup_payment',[PickupPaymentController::class,'index']);

Route::post('/pickup_payment',[PickupPaymentController::class,'store']);

Route::get('/pickup_payment/{id}',[PickupPaymentController::class,'show']);

Route::put('/pickup_payment/{id}',[PickupPaymentController::class,'update']);

Route::delete('/pickup_payment/{id}',[PickupPaymentController::class,'destroy']);


// ******************* Pickup Comment  ***********************
Route::get('/pickup_comment',[PickupCommentController::class,'index']);

Route::post('/pickup_comment',[PickupCommentController::class,'store']);

Route::get('/pickup_comment/{id}',[PickupCommentController::class,'show']);

Route::put('/pickup_comment/{id}',[PickupCommentController::class,'update']);

Route::delete('/pickup_comment/{id}',[PickupCommentController::class,'destroy']);


// ******************* Pickup Tracking  ***********************
Route::get('/pickup_tracking',[PickupTrackingController::class,'index']);

Route::post('/pickup_tracking',[PickupTrackingController::class,'store']);

Route::get('/pickup_tracking/{id}',[PickupTrackingController::class,'show']);

Route::put('/pickup_tracking/{id}',[PickupTrackingController::class,'update']);

Route::delete('/pickup_tracking/{id}',[PickupTrackingController::class,'destroy']);

//---------------------------------------------------------

//----------------------------------------------------------
Route::group(['middleware' =>['auth:sanctum']],function(){


// ******************* Logout ***********************
Route::post('/logout',[AuthController::class,'logout']);

});