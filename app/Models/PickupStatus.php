<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupStatus extends Model
{
    use HasFactory;

    protected $table = "pickup_statuses";

    protected $fillable = ['status_name','description','is_active'];
}
