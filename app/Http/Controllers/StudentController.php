<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;
use HttpClient\Http\Requests;

class StudentController extends ClientController
{
    public function getAllStudents()
    {
        $students = $this->obtainAllStudents();
        return view('students.all-students',['students' => $students ]);
    }

    public function getInputStudent()
    {
       return view('students.input-student');
    }

    public function postOneStudent(Request $request)
    {
        $this->validate($request,['studentID' => 'required|numeric']);
        $studentID = $request->get('studentID');
        $student = $this->obtainOneStudent($studentID);
        return view('students.one-student',['student' => $student ]);
    }

    public function getCreateStudent()
    {
        return view('students.create-student');
    }

    public function postCreateStudent(Request $request)
    {
        $message = $this->CreateOneStudent($request->all());
        return  redirect('/students')->with('success',$message);
    }
}
