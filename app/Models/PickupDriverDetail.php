<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupDriverDetail extends Model
{
    use HasFactory;

    protected $table = "pickup_driver_details";

    protected $fillable = ['pickup_request_id','driver_id','is_active'];
}
