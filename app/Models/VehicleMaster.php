<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleMaster extends Model
{
    use HasFactory;


    protected $table = "vehicle_masters";

    protected $fillable = ['owner_name','owner_address','owner_email_id','owner_mobile_number','vehicle_number','vehicle_plate_no','vehicle_state','location_id','chassis_number','vehicle_color','vehicle_make','vehicle_model','vehicle_year','is_active'];

    
    
    // public function location_master()
    // {
    //     return $this->belongsTo('App\Models\LocationMaster');
    // }

}
