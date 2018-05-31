@extends('layouts.master')

@section('content')
   
   <form action="{{url('/courses/students')}}" method="POST" role="form">
    @csrf
    <legend>Select Course</legend>
        <div class="form-group">
            <label for="">Course ID</label>
            <select name="courseID">
                <option>Select a course</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Select course</button>
   </form>
@endsection