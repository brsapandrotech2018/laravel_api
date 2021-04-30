<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupTracking extends Model
{
    use HasFactory;

    protected $table = "pickup_trackings";

    protected $fillable = ['pickup_request_id','status_id','driver_id','vehicle_id','location_id','is_accepted'];

}
