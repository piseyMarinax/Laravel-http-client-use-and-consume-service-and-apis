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

Route::get('/teachers','TeacherController@getAllTeachers');
Route::get('/courses','CourseController@getAllCourse');

Route::get('/student','StudentController@getInputStudent');
Route::post('/student','StudentController@postOneStudent');
Route::get('/students','StudentController@getAllStudents');
