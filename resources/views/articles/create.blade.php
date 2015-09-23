@extends('main')

@section('content')
    <h1>Write a New Article</h1>

    <hr>
    {!! Form::open(array('url' =>'/articles','method' =>'POST')) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('body','Body:') !!}
        {!! Form::textarea('body',null,['class' =>'form-control']) !!}
    </div>

    {{--<div class="form-group">
        {!! Form::label('published_at', 'Publish on:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>--}}

    <div class="form-group">
        {!! Form::label('created_at','Create on:') !!};
        {!! Form::input('date','created_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>

    <div class="form-control">
        {!! Form::submit('Add Article',['class' =>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop