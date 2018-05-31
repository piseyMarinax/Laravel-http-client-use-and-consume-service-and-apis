@extends('layouts.master')

@section('content')
   
   <form action="{{url('/teacher/create')}}" method="post" role="form">
    @csrf
    <legend>Create Student</legend>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control"   placeholder="The teacher name" name="name" required>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control"   placeholder="The teacher address" name="address" required>
        </div>
         <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control"   placeholder="The teacher phone" name="phone" required>
        </div>
         <div class="form-group">
            <label for="">Profession</label>
            <select name="profession" id="inputCareer" class="form-control" required>
                <option>Select a profession</option>
                <option value="math">Math</option>
                <option value="physics">Physics</option>
                <option value="engineering">Engineering</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Teacher</button>
   </form>
@endsection