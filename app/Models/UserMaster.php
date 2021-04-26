<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    use HasFactory;

    protected $table = "user_masters";

    protected $fillable = ['user_type_id','user_display_name','user_name','contact_number','email_id'];
}
