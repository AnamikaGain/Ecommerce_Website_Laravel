<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable =['product_id','product_name','category_id','brand_id','product_short_description','product_long_description','product_price','product_image','product_size','product_quantity','publication_status'];
}
