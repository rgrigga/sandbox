@extends('layouts.scaffold')

@section('main')

<h1>Show Score</h1>

<p>{{ link_to_route('scores.index', 'Return to all scores') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Value</th>
				<th>Points</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $score->name }}}</td>
					<td>{{{ $score->value }}}</td>
					<td>{{{ $score->points }}}</td>
                    <td>{{ link_to_route('scores.edit', 'Edit', array($score->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('scores.destroy', $score->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
