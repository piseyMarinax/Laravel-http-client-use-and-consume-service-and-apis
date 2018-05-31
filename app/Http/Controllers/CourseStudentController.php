<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

class CourseStudentController extends ClientController
{
    
    //show all Student courses
    public function getShowAllStudentCourses()
    {
        $courses = $this->obtainAllCourses();
      
        return view('course-student.select-course',['courses' => $courses]);
    }

    public function postShowAllStudentCourses(Request $request)
    {
        $courseID = $request->get('courseID');
        $students = $this->obtainCourseStudent($courseID);
        return view('course-student.show-course-student',['students' => $students]);
    }
}
