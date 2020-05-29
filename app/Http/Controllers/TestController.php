<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return Student::find(2)->classroom->grade;
        return view('test.index');
    }
}
