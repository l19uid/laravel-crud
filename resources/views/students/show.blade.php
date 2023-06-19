@extends('students.layout')
@section('content')
        <div class="card">
        <div class="card-header">Inspect Student Page</div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/student") }}'">Back</button>
            <div class="card-body">
                <h3 class="card-title">Name : {{ $students->name }}</h3>
                <h6 class="card-text">Email : {{ $students->email }}</h6>
                <h6 class="card-text">Phone : {{ $students->phone }}</h6>
            </div>
            </hr>
        </div>
    </div>
@stop
