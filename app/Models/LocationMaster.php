<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationMaster extends Model
{
    use HasFactory;

    protected $table = "location_masters";

    protected $fillable = ['location_name','location_details','state_id','country_id','is_active'];

    
    // public function vehicle_master()
    // {
    //     return $this->hasOne('App\Models\VehicleMaster');
    // }

    // public function driver_master()
    // {
    //     return $this->hasOne('App\Models\DriverMaster');
    // }
}
