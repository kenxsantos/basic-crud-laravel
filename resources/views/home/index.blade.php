@extends('students.layout')

@section('title', 'Index Page')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center " style="margin-top: 10rem">
    <div class="text-center">
        <h1>Welcome to Student Management</h1>
        <p>This is the content of the main page</p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-eye" aria-hidden="true"></i> View Students
        </a>
        <a href="{{ route('weather.index') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-eye" aria-hidden="true"></i> View Weather
        </a>
    </div>
</div>
@endsection
