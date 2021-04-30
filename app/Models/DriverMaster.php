<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverMaster extends Model
{
    use HasFactory;

    protected $table = "driver_masters";

    protected $fillable = ['driver_name','driver_email_id','driver_mobile_number1','driver_mobile_number2','driver_address','driver_pan_number','vehicle_state','location_id','is_active'];

    
    // public function location_master()
    // {
    //     return $this->belongsTo('App\Models\LocationMaster');
    // }
}
