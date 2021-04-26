<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAdd extends Model
{
    use HasFactory;
    protected $table = "customer_adds";

    protected $fillable = ['customer_id','address_type_id','country','state','city','locality','street'];
}
