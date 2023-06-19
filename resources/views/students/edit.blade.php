@extends('students.layout')
@section('content')
    @if(auth()->check() && auth()->user()->admin === 1)
        <div class="card">
            <div class="card-header">Edit Student Page</div>
            <div class="card-body">

                <form action="{{ url('student/' .$students->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id"/>
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
                    <label>Email</label></br>
                    <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
                    <label>Phone</label></br>
                    <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>
            </div>
        </div>
    @endif
@stop
