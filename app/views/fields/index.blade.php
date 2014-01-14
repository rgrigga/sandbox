@extends('layouts.scaffold')

@section('main')

<h1>All Fields</h1>

<p>{{ link_to_route('fields.create', 'Add new field') }}</p>

@if ($fields->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($fields as $field)
				<tr>
					<td>{{{ $field->name }}}</td>
                    <td>{{ link_to_route('fields.edit', 'Edit', array($field->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('fields.destroy', $field->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no fields
@endif

@stop
