@extends('layouts.master')

@section('content')
   
   <form action="{{url('/teacher/remove')}}" method="POST" role="form">
    @csrf
    {{method_field('DELETE')}}
    <legend>update Teacher</legend>
        <input type="hidden" name="teacherID" value="{{ $teacher->id }}">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control"  placeholder="The teacher name" name="name" value="{{ $teacher->name }}" required disabled >
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control"   placeholder="The teacher address" name="address" value="{{ $teacher->address }}" required disabled>
        </div>
         <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control"   placeholder="The teacher phone" name="phone" value="{{ $teacher->phone }}" required disabled>
        </div>
         <div class="form-group">
            <label for="">Profession</label>
            <select name="profession" id="inputCareer" class="form-control" required disabled>
                <option>Select a career</option>
                <option value="math"   {{ $teacher->profession == "math" ? 'selected' : ''}} >Math</option>
                <option value="physics"  {{ $teacher->profession == "physics" ? 'selected' : ''}}>Physics</option>
                <option value="engineering"  {{ $teacher->profession == "engineering" ? 'selected' : ''}}>Engineering</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Delete Teacher</button>
   </form>
@endsection