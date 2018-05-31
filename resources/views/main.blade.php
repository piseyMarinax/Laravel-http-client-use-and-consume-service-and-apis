@extends('layouts.master')

@section('content')


<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/students') }}">Show all students</a></li>
     <li class="list-group-item"><a href="{{ url('/teachers') }}">Show all teachers</a></li>
     <li class="list-group-item"><a href="{{ url('/courses') }}">Show all course</a></li>
</ui>
<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/student') }}">Show a Specific students</a></li>
     <li class="list-group-item"><a href="{{ url('/teacher') }}">Show a Specific teachers</a></li>
     <li class="list-group-item"><a href="{{ url('/courses/create') }}">Create a Specific course</a></li>
     <li class="list-group-item"><a href="{{ url('/courses') }}">Show all courses</a></li>
</ui>
<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/student/create') }}">Create a Specific student</a></li>
     <li class="list-group-item"><a href="{{ url('/teacher/create') }}">Create a Specific teacher</a></li>
</ui>
<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/student/update') }}">Update a Specific student</a></li>
     <li class="list-group-item"><a href="{{ url('/teacher/update') }}">Update a Specific teacher</a></li>
</ui>
<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/teacher/remove') }}">Remove a Specific Teacher</a></li>
</ui>
<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/student/remove') }}">Remove a Specific Student</a></li>
</ui>

<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/courses/students') }}">Show The student of a courses</a></li>
</ui>
<ui class="list-group">
     <li class="list-group-item"><a href="{{ url('/courses/teachers') }}">Show The teacher of a courses</a></li>
</ui>
@endsection