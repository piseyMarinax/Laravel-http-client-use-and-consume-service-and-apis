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
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->address }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->profession }}</td>
            </tr>
        </tbody>
    </table>
@endsection