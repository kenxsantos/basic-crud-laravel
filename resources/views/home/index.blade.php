@extends('students.layout')

@section('title', 'Index Page')

@section('content')
    <div class="text-center">
        <h1>Welcome, Student Management</h1>
        <p>This is the content of the main page</p>
        <a href="{{ route('students.index') }}"><button class="btn btn-primary btn-sm">
                <i class="fa fa-eye" aria-hidden="true"></i> View Students
            </button>
        </a>


        <h1>Students</h1>

        <ul>
            @foreach ($students as $student)
                <li>{{ $student->name }} - {{ $student->address }}</li>
            @endforeach
        </ul>

    </div>
@endsection
