<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";

    protected $fillable = ['customer_id','mobile_number','first_name','last_name','user_type_id','email_id'];
}
