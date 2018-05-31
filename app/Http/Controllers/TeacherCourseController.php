<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

class TeacherCourseController extends ClientController
{
    //show all Teacher courses
    public function getShowAllTeacherCourses()
    {

        $teachers = $this->obtainAllTeachers();
        return view('course-teacher.select-teacher',['teachers' => $teachers]);
    }

    public function postShowAllTeacherCourses(Request $request)
    {
        $teacherID = $request->get('teacherID');

        $courses = $request->get('courseID');
        $courses = $this->obtainCourseTeacher($teacherID);
      
        return view('course-teacher.show-course-teacher',['courses' => $courses]);
    }
}
