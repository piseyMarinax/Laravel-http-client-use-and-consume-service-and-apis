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
    public function getCreateTeacher()
    {
        return view('teachers.create-teacher');
    }

    public function postCreateTeacher(Request $request)
    {
        $message = $this->CreateOneTeacher($request->all());
        
        return redirect('/teachers')->with('success',$message);
    }
    public function getUpdateTeacher()
    {
        $teachers = $this->obtainAllTeachers();
        return view('teachers.select-teacher',['teachers' => $teachers]);
    }

    public function postUpdateTeacher(Request $request)
    {
        $teacherID = $request->get('teacherID');
        $teacher = $this->obtainOneTeacher($teacherID);
        return view('teachers.update-teacher',['teacher' => $teacher]);
    }

    public function putUpdateTeacher(Request $request)
    {
        $message = $this->UpdateOneTeacher($request->all());
        return redirect('/teachers')->with('success',$message);
    }
    public function getRemoveTeacher()
    {
        $teachers = $this->obtainAllTeachers();
        return view('teachers.select-remove-teacher',['teachers' => $teachers]);
    }

    public function postRemoveTeacher(Request $request)
    {
        $teacherID = $request->get('teacherID');
        $teacher = $this->obtainOneTeacher($teacherID);
        return view('teachers.confirm-remove-teacher',['teacher' => $teacher]);
    }

    public function deleteRemoveTeacher(Request $request)
    {
        $message = $this->RemoveOneTeacher($request->all());
        return redirect('/teachers')->with('success',$message);
    }
}
