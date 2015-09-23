@extends('main')

@section('content')
	<h1>Articles</h1>
	<hr/>

	@foreach($articles as $arti)
	<articles>
	<!--<h2>{{ $arti->title }}</h2>-->
	{{--添加超链接--}}
	{{--方法一--}}
   {{--<a href="/articles/{{$arti->id}}"><h2>{{ $arti->title }}</h2></a> --}}

   {{--方法二--}}
   <!--<a href="{{ action('ArticlesController@show', [$arti->id]) }}"><<h2>{{ $arti->title }}</h2></a>-->

    {{--方法三--}}
     <a href="{{ url('/articles', $arti->id) }}"><h2>{{ $arti->title }}</h2></a>
	<div class="body">{{$arti->body}}</div>
	</articles>
	@endforeach
@stop