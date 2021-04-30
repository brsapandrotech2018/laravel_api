<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorMaster extends Model
{
    use HasFactory;

    protected $table = "operator_masters";

    protected $fillable = ['operator_name','operator_address','location_id','is_active'];

    
}
