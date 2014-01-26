@extends('template/main')

@section('page-header')
<div class="sixes color1">1</div>
<div class="sixes color2">2</div>
<div class="sixes color3">3</div>
<div class="sixes color4">4</div>
<div class="sixes color5">5</div>
<div class="sixes color6">6</div>
@stop

@section('main')
@parent
<h1>Index</h1>
<p>This is the index page.</p>

@stop

@section('secondary')
@parent
<h3>Index Links</h3>
<nav>
	<ul class="nav">
		@foreach ($links as $link)
		<li><a href="/notes/{{$link}}">{{$link}}</a></li>
		@endforeach
	</ul>
</nav>


@stop