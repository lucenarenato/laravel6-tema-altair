<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentPost;
use App\Student;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('student.index');
    }

    public function getStudents()
    {
        return Datatables::of(Student::query())
            ->addColumn('edit', function ($row) {
                $btn = '<a href="'.route('student.edit',$row->id).'"><i class="md-icon material-icons">&#xE254;</i></a>';
                return $btn;
            })
            ->addColumn('Delete',function($row){ return  ' <a href="'. route('student.destroy',$row->id).'"  class="btn btn-danger" >Delete</a>'; })
            ->addColumn('grade',function($row){ return $row->classroom->grade->sn  ; })
            ->addColumn('classroom',function($row){     return $row->classroom->name;})
            ->rawColumns(['Delete','edit','grade','classroom'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $grades= auth()->user()->school->grades;
        $classrooms=[];

        return view('student.create',compact('grades','classrooms'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentPost $request)
    {
        //
        //  $request->input('date_of_birth') =  date('Y-m-d H:i:s');

        Student::create($request->input());

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        $grades= auth()->user()->school->grades;
        $classrooms=[];
        return view('student.edit',compact('student','grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudentPost $request, Student $student)
    {
        //
        $student->fill($request->input());
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return redirect()->route('student.index');
    }


}
