@extends('layouts.app')


@section('content')

<h1>Create Todo</h1>

{!! Form::model($todo,['method'=>'PATCH','action'=>['TodosController@update',$todo->id]]) !!}
    <div class="form-group">
        {!! Form::label('text','Enter Title:')!!}
        {!! Form::text('text',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Enter Task:')!!}
        {!! Form::textarea('body',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('due','Enter Due Date:')!!}
        {!! Form::text('due',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}

@endsection