@extends('main')

@section('content')
	<h1>About me</h1>
	<p>Age is {{ $name }}</p>
	<p>Age is {{ $age }}</p>

@stop


@section('footer')
@if(!empty($name))
<script>alert("hello");</script>
@else
<?php echo 'hello';?>
@endif
@stop
<?php $data=[]; ?>
<ul>
	@foreach($data as $rows)
	<li>
		{{ $rows }}
	</li>
	@endforeach
</ul>
<?php echo 'hello';	?>