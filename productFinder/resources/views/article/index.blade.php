@extends ('master')


@section ('content')
	<h1>Article</h1>
	<hr/>

	@foreach($articles as $article)
		
		<div class="blockContain">
			<h2>
			
				<a href="{{ action('articleController@show',[$article->id]) }}">{{$article->title}}</a>

			</h2>

			<div>{{$article->body}}</div>
		</div>
		
	@endforeach

@stop