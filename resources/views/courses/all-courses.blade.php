@extends('layouts.master')

@section('content')
    <table class="table table-stribed table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>profession</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->value }}</td>
                <td>{{ $course->teacher_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection