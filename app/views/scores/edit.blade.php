@extends('layouts.scaffold')

@section('main')

<h1>Edit Score</h1>
{{ Form::model($score, array('method' => 'PATCH', 'route' => array('scores.update', $score->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('value', 'Value:') }}
            {{ Form::text('value') }}
        </li>

        <li>
            {{ Form::label('points', 'Points:') }}
            {{ Form::text('points') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('scores.show', 'Cancel', $score->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
