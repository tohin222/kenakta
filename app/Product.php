<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
     protected $fillable = [
      'title','textarea','quantity','price','offer_price','status','image',];

        protected $dates = ['deleted_at'];

}
//  'admin_id','brand_id','catagory_id',