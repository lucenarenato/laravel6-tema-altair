<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['name', 'student_no', 'date_of_birth','classroom_id','notes'];

    public function classroom()
    {
        return  $this->belongsTo(Classroom::class);
    }
    public function grade()
    {
        return $this->classroom->grade;
    }
}
