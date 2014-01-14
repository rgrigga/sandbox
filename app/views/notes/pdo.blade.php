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

<h2>
	<a href="http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk">
	http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk</a>
</h2>
<!-- http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk -->

<iframe src="http://laravel.com/docs/routing"></iframe>

<iframe src="http://www.w3schools.com"></iframe>
@endsection