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
Route::get('/student/create','StudentController@getCreateStudent');
Route::post('/student/create','StudentController@postCreateStudent');

//update student
Route::get('/student/update','StudentController@getUpdateStudent');
Route::post('/student/update','StudentController@postUpdateStudent');
Route::put('/student/update','StudentController@putUpdateStudent');

//remove tacher
Route::get('/student/remove','StudentController@getRemoveStudent');
Route::post('/student/remove','StudentController@postRemoveStudent');
Route::delete('/student/remove','StudentController@deleteRemoveStudent');

// Teacher
Route::get('/teacher','TeacherController@getInputTeacher');
Route::post('/teacher','TeacherController@postOneTeacher');
Route::get('/teachers','TeacherController@getAllTeachers');
Route::get('/teacher/create','TeacherController@getCreateTeacher');
Route::post('/teacher/create','TeacherController@postCreateTeacher');

//update teacher
Route::get('/teacher/update','TeacherController@getUpdateTeacher');
Route::post('/teacher/update','TeacherController@postUpdateTeacher');
Route::put('/teacher/update','TeacherController@putUpdateTeacher');

//remove tacher
Route::get('/teacher/remove','TeacherController@getRemoveTeacher');
Route::post('/teacher/remove','TeacherController@postRemoveTeacher');
Route::delete('/teacher/remove','TeacherController@deleteRemoveTeacher');

// Course
Route::get('/courses','CourseController@getAllCourses');

Route::get('/courses/students','CourseStudentController@getShowAllStudentCourses');
Route::post('/courses/students','CourseStudentController@postShowAllStudentCourses');

Route::get('/courses/teachers','TeacherCourseController@getShowAllTeacherCourses');
Route::post('/courses/teachers','TeacherCourseController@postShowAllTeacherCourses');




