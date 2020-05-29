<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable=['name','grade_id'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }


}
