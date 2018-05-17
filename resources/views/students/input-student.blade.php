@extends('layouts.master')

@section('content')
   
   <form action="{{url('/student')}}" method="post" role="form">
    @csrf
    <legend>Input Student</legend>
        <div class="form-group">
            <label for="">Student ID</label>
            <input type="number" class="form-control"   placeholder="The student ID" name="studentID">
        </div>
   </form>
@endsection