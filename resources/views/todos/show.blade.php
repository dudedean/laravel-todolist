@extends('layouts.app')


@section('content')

    <a href="/" class="btn btn-info">Go Back</a>

    <h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a> </h1> 

    <div class="badge badge-danger">{{$todo->due}}</div>

    <hr>

    <p>{{$todo->body}}</p>

    <br>
    <br>

    <a href="{{$todo->id}}/edit" class="btn btn-warning">Edit</a>

    {!! Form::open(['method'=>'DELETE','action'=>['TodosController@destroy',$todo->id],'class' => 'float-right']) !!}
        <div class="form-group">
        {!! Form::submit('Delete Post',['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}

@endsection