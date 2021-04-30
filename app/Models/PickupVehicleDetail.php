<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupVehicleDetail extends Model
{
    use HasFactory;

    protected $table = "pickup_vehicle_details";

    protected $fillable = ['pickup_request_id','vehicle_id','is_active'];
}
