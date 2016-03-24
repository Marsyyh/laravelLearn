@extends('master')

@if ($first == 'Ares')
@section('content')
	<h1>About Me: {!!$last!!}</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ullam architecto quam laborum hic error, repellat ea eaque, accusantium iure a quo eligendi fugiat nemo deleniti placeat assumenda animi enim!
	</p>
@stop
@endif

@section('footer')
	<script type="text/javascript">alert("this is test");</script>
@stop