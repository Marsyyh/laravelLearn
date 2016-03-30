@extends('app')

@include('partial.nav',['navTrigger'=>true])

@section('content')

	<div class="container">
		@include('partial._neverForget')
		
		{!! Form::open(['url'=>'registration']) !!}
			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('first_name','First Name: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::text('first_name') !!}
				</div>
			</div>

			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('last_name','Last Name: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::text('last_name') !!}
				</div>
			</div>

			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('email','Email: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::email('email') !!}
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
                    {!! Form::submit('Regist') !!}
                </div>
            </div>

            @include('errors.validationError')
		
		{!! Form::close() !!}

@stop