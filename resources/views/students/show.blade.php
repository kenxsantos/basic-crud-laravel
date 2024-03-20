@extends('students.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $students->name }}</h5>
                    <p class="card-text">Address: {{ $students->address }}</p>
                    <p class="card-text">Contact: {{ $students->contact }}</p>
                    <p class="card-text">Course: {{ $students->course }}</p>
                    <p class="card-text">Year: {{ $students->year }}</p>
                    <p class="card-text">Section: {{ $students->section }}</p>
                    <p class="card-text">Age: {{ $students->age }}</p>

                </div>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h2>QR Code</h2>
                    </div>
                    <div class="card-body">
                        {{!! QrCode::size(300)->generate(route('students.show', $students)) !!}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 