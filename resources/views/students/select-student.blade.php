@extends('layouts.master')

@section('content')
   
   <form action="{{url('/student/update')}}" method="POST" role="form">
    @csrf
    <legend>Input Student</legend>
        <div class="form-group">
            <label for="">Student ID</label>
            <select name="studentID" id="">
                <option>Select a student</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
   </form>
@endsection