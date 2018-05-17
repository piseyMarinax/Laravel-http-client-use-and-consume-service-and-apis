<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends ClientController
{
    public function getAllTeachers()
    {
        $teachers = $this->obtainAllTeachers();
        return view('teachers.all-teachers',['teachers' => $teachers ]);
    }

    public function getInputTeacher()
    {
       return view('teachers.input-teacher');
    }

    public function postOneTeacher(Request $request)
    {
        $this->validate($request,['teacherID' => 'required|numeric']);
        $teacherID = $request->get('teacherID');
        $teacher = $this->obtainOneTeacher($teacherID);
        return view('teachers.one-teacher',['teacher' => $teacher ]);
    }
}
