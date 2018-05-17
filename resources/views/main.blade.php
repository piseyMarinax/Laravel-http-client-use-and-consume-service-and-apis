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
     <li class="list-group-item"><a href="{{ url('/course') }}">Show all course</a></li>
</ui>

@endsection