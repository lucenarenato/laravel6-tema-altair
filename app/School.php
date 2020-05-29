<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    //
    use SoftDeletes;
     protected $fillable=['name','type','notes'];
     public function grades()
     {
         return $this->hasMany(Grade::class);
     }
}
