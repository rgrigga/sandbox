@extends('layouts.scaffold')

@section('main')

<h1>All Photos</h1>

<p>{{ link_to_route('photos.create', 'Add new photo') }}</p>

@if ($photos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Link</th>
				<th>Photo</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($photos as $photo)
				<tr>
					<td>{{{ $photo->title }}}</td>
					<td>{{{ $photo->link }}}</td>
					
					<td>{{{ $photo->photo }}}</td>
					<td><img src="{{{ $photo->photo }}}" alt="{{{ $photo->photo }}}"></td>
                    <td>{{ link_to_route('photos.edit', 'Edit', array($photo->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('photos.destroy', $photo->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no photos
@endif

@stop
