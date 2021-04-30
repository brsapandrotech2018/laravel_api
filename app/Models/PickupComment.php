<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupComment extends Model
{
    use HasFactory;
    protected $table = "pickup_comments";

    protected $fillable = ['comment','public_viewable','created_by'];
}
