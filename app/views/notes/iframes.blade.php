@extends('template/main')
@section('main')
<style>
	iframe{
		width: 100%;
		height: 100%;
	}
	iframe #document{
		width:300px;
	}
</style>

<aside>
	<h1>iFrames</h1>
	<h2>
		<a href="http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk">
		http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk</a>
	</h2>
</aside>

<iframe src="http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk" frameborder="0"></iframe>

<!-- http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk -->
<h1>Laravel docs:</h1>
<iframe src="http://laravel.com/docs/routing"></iframe>

<h1>W-3 Schools:</h1>
<iframe src="http://www.w3schools.com"></iframe>
@endsection