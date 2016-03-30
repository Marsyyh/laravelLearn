@extends('app')

@include('partial.nav',['navTrigger'=>false])

@section('content')

	<div class="container">
		
		{!! Form::open(['url'=>'todo/home']) !!}
			<div class="row" style="margin-top:20px">
                <div class="col-xs-12">
                    <h4>New Task</h4>
                </div>                
            </div>

			<div class="row">
                <div class="col-xs-2">
                    {!! Form::label(null,'Description') !!}
                </div>
                <div class="col-xs-10">
                    {!! Form::text('description',null,['size'=>100]) !!}
                </div>
            </div>

			 <div class="row" style="margin-top: 5px">
                <div class="col-xs-2">
                    {!! Form::label(null,'ScheduledDate') !!}
                </div>
                <div class="col-xs-10">
                    {!! Form::date('date') !!}
                    {!! Form::submit('Add',['name'=>'action']) !!}
                </div>
            </div>
			
			@include('errors.validationError')
			<!-- this place should have error handler -->

			<div class="row" style="margin-top:20px">
                <div class="col-xs-12">
                    <h4>Tasks</h4>
                </div>
            </div>
			

			<div class="row" style="margin-top:5px">
                    <div class="col-xs-12">
                        <table>
                            <thead>
								@if(count($tasks) == 0)
		                                    
						            <tr>
						                <td colspan="4">
						                    No tasks found. Enjoy your day. :)
						                </td>
						            </tr>

								@else
									
									<tr>
                                        <th colspan="4">
                                        	{!! Form::submit('Edit',['name'=>'action']) !!}
                                        	{!! Form::submit('Delete',['name'=>'action']) !!}
                                        </th>
                                    </tr>
			

									@foreach($tasks as $task)
										<tr>
					                        <td class="select">
					                        	{!! Form::radio('taskId',$task['id']) !!}
					                        </td>
					                        <td class="description">{{ $task['description'] }}</td>
					                        <td class="status">{{ $task['status'] }}</td>
					                        <td class="date">{{ $task['date'] }}</td>
					                    </tr>

									@endforeach
								@endif

                            </thead>
                        </table>
                    </div>
            </div>

		
		{!! Form::close() !!}

@stop