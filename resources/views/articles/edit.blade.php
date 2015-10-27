@extends('main')
@section('content')
    <h1>Edit {!! $articles->id !!}</h1>
    <hr/>
    {!! Form::model($articles,['method' => 'PATCH', 'action' => ['ArticlesController@update',$articles->id] ])  !!}
    {{--引入表单视图模版--}}
    @include('articles.form',['submitButtonText' => 'Update Article']);
    {!! Form::close() !!}
    {{-- 引入验证信息视图 验证输入，显示错误信息--}}
   @include('errors.list');
@stop