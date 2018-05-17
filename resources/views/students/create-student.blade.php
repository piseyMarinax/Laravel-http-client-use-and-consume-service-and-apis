@extends('layouts.master')

@section('content')
   
   <form action="{{url('/student/create')}}" method="post" role="form">
    @csrf
    <legend>Create Student</legend>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control"   placeholder="The student name" name="name" required>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control"   placeholder="The student address" name="address" required>
        </div>
         <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control"   placeholder="The student phone" name="phone" required>
        </div>
         <div class="form-group">
            <label for="">Career</label>
            <select name="career" id="inputCareer" class="form-control" required>
                <option>Select a career</option>
                <option value="math">Math</option>
                <option value="physics">Physics</option>
                <option value="engineering">Engineering</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Student</button>
   </form>
@endsection