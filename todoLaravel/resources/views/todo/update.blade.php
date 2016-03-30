@extends('app')

@include('partial.nav',['navTrigger'=>false])

@section('content')

	<div class="container">
		

		{!! Form::open(['url'=>'todo/home']) !!}
			<div class="row" style="margin-top:20px">
                <div class="col-xs-12">
                    <h4>Update Task</h4>
                </div>                
            </div>

            <div class="row">
                <div class="col-xs-2">
                	{!! Form::label(null,'Description') !!}
                </div>

                <div class="col-xs-10">
                	{!! Form::hidden('id',$task['id']) !!}
                	{!! Form::text('description',$task['description'],['size'=>100]) !!}
                </div>
            </div>

            <div class="row" style="margin-top: 5px">
                <div class="col-xs-2">
					{!! Form::label(null,'Status') !!}
	            </div>
                <div class="col-xs-10">
                	{!! Form::select('status',['Not Started','Started','Mid-Way','Completed'],null,['N','S','M','C']) !!}
                    {!! Form::submit('Update',['name'=>'action']) !!}
                </div>
            </div>

		{!! Form::close() !!}

	</div>

@stop