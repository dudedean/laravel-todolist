@extends('layouts.app')


@section('content')

    <a href="/" class="btn btn-info">Go Back</a>

    <h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a> </h1> 

    <div class="badge badge-danger">{{$todo->due}}</div>

    <hr>

    <p>{{$todo->body}}</p>


@endsection