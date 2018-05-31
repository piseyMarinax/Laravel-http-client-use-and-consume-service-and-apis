@extends('layouts.master')

@section('content')
   
   <form action="{{url('/student/remove')}}" method="POST" role="form">
    @csrf
    <legend>Student</legend>
        <div class="form-group">
            <label for="">student ID</label>
            <select name="studentID">
                <option>Select a Student</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Remove student</button>
   </form>
@endsection