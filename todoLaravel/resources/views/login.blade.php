@extends('app')

@include('partial.nav',['navTrigger'=>true])

@section('content')

	<div class="container">
		
		@include('partial._neverForget')
		
		{!! Form::open(['url'=>'login']) !!}
			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('userName','userName: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::email('userName') !!}
				</div>
			</div>

			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('password','Password: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::password('password') !!}
				</div>
			</div>

			<div class="row tm5">
                <div class="col-xs-2 col-md-offset-6">
                    {!! Form::submit('Log in') !!}                       
                    <a href="{{ url('registration') }}">Register</a>
                </div>
            </div>
			
			@include('errors.validationError')
		{!! Form::close() !!}

	</div>

@stop