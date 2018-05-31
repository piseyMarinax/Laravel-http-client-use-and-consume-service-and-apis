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
        
        return redirect('/students')->with('success',$message);
    }


    // Update student
    public function getUpdateStudent()
    {
        $students = $this->obtainAllStudents();
        return view('students.select-student',['students' => $students]);
    }

    public function postUpdateStudent(Request $request)
    {
        $studentID = $request->get('studentID');
        $student = $this->obtainOneStudent($studentID);
        return view('students.update-student',['student' => $student]);
    }

    public function putUpdateStudent(Request $request)
    {
        $message = $this->UpdateOneStudent($request->all());
        return redirect('/students')->with('success',$message);
    }

    // Remove student
    public function getRemoveStudent()
    {
        $students = $this->obtainAllStudents();
        return view('students.select-remove-student',['students' => $students]);
    }
    public function postRemoveStudent(Request $request)
    {
        $studentID = $request->get('studentID');
        $student = $this->obtainOneStudent($studentID);
        return view('students.confirm-remove-student',['student' => $student]);
    }
    public function deleteRemoveStudent(Request $request)
    {
        $message = $this->RemoveOneStudent($request->all());
        return redirect('/students')->with('success',$message);
    }
}
