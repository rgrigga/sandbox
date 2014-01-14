@extends('layouts.scaffold')

@section('main')

<h1>Show Photo</h1>

<p>{{ link_to_route('photos.index', 'Return to all photos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
				<th>Link</th>
				<th>Photo</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $photo->title }}}</td>
					<td>{{{ $photo->link }}}</td>
					<td>{{{ $photo->photo }}}</td>
                    <td>{{ link_to_route('photos.edit', 'Edit', array($photo->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('photos.destroy', $photo->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
