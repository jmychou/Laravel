@extends('main')

@section('content')
    <h1>Write a New Article</h1>

    <hr>
    {!! Form::open(array('url' =>'/articles','method' =>'POST')) !!}
    {{--引入表单视图模版--}}
    @include('articles.form',['submitButtonText' => 'Add Article']);

    {!! Form::close() !!}
    {{-- 验证输入，显示错误信息--}}
    @include('errors.list');
@stop