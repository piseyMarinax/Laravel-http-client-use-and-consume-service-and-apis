@extends('layouts.master')

@section('content')
   
   <form action="{{url('/teacher/update')}}" method="POST" role="form">
    @csrf
    <legend>Teachers</legend>
        <div class="form-group">
            <label for="">Teacher ID</label>
            <select name="teacherID">
                <option>Select a teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update teacher</button>
   </form>
@endsection