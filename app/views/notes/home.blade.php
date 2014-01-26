@extends('template/main')

@section('page-header')
	<h1>HOME</h1>
	<h2>{{$pagetitle}}</h2>
	dd($links);
@parent
@stop

@section('main')
@parent
<h2>
	Home Page
</h2>

@stop

@section('secondary')

<h3>Home Links</h3>
<nav>
	<ul class="nav">
		<li><a href="http://www.lesscss.org/#usage">Less Usage</a></li>
		<li>
			<a href="http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk">iframe security</a>
		</li>

	</ul>
</nav>
@parent

@stop