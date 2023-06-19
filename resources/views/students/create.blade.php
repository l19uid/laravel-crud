@extends('students.layout')
@section('content')
    @if(auth()->check() && auth()->user()->admin === 1)
        <div class="card">
            <div class="card-header">Students Page</div>
            <div class="card-body">
                <form action="{{ url('student') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>Email</label></br>
                    <input type="text" name="email" id="email" class="form-control"></br>
                    <label>Phone</label></br>
                    <input type="text" name="phone" id="phone" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>
            </div>
        </div>
    @endif
@stop
