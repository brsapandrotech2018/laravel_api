<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupRequest extends Model
{
    use HasFactory;

    protected $table = "pickup_requests";

    protected $fillable = ['customer_id','pickup_address','location_id','pickup_status','pickup_request_attendedBy'];
}
