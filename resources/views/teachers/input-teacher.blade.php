@extends('layouts.master')

@section('content')
   
   <form action="{{url('/teacher')}}" method="post" role="form">
    @csrf
    <legend>Input Teacher</legend>
        <div class="form-group">
            <label for="">Teacher ID</label>
            <input type="number" class="form-control"   placeholder="The Teacher ID" name="teacherID">
        </div>
   </form>
@endsection