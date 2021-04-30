<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPayment extends Model
{
    use HasFactory;

    protected $table = "pickup_payments";

    protected $fillable = ['pickup_request_id','customer_id','payment_mode','payment_type','amount','cgst','sgst','discount','total','transaction_id','channel_transaction_initiated'];
}
