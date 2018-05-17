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
    return view('main');
});

// Student
Route::get('/student','StudentController@getInputStudent');
Route::post('/student','StudentController@postOneStudent');
Route::get('/students','StudentController@getAllStudents');

// Teacher
Route::get('/teacher','TeacherController@getInputTeacher');
Route::post('/teacher','TeacherController@postOneTeacher');
Route::get('/teachers','TeacherController@getAllTeachers');

// Course
Route::get('/courses','CourseController@getAllCourses');



