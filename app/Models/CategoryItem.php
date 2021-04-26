<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryItem extends Model
{
    use HasFactory;
    protected $table = "category_items";

    protected $fillable = ['category_id','unit_id','item_name','unit_price','description'];
}
