<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupRequestItem extends Model
{
    use HasFactory;

    protected $table = "pickup_request_items";

    protected $fillable = ['pickup_request_id','item_id','quantity','price','total_price','is_active'];
    // protected $fillable = ['pickup_request_id','item_id','is_active'];
}
