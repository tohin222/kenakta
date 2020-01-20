<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Catagory extends Model
{
         use SoftDeletes;
     
     protected $fillable = [
        'name', 'description','image',];

        protected $dates = ['deleted_at'];

}
