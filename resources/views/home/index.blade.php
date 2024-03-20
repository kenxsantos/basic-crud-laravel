@extends('students.layout')

@section('title', 'Index Page')

@section('content')
    <h1>Welcome, Laravel BlogPost</h1>
    <p>This is the content of the main page</p>
    <a href="{{ route('students.show' , 'students') }}" 
        ><button class="btn btn-info btn-sm">
            <i class="fa fa-eye" aria-hidden="true"></i> View Students
        </button>
    </a>
@endsection