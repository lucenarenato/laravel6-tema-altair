<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student', 'StudentController');
Route::get('/studnt/get-students','StudentController@getStudents')->name('student.getStudents');

Route::get('index',function(){
    return view ('index');
});

Route::resource('term', 'TermController');
Route::resource('school', 'SchoolController');
Route::resource('term', 'TermController');
Route::resource('grade', 'GradeController');
Route::resource('classroom', 'ClassroomController');
Route::get('/grade/{grade_id}/classrooms','GradeController@getClassrooms')->name('getClassrooms');

Route::get('/test','TestController@index');

