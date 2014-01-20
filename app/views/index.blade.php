@extends('template/main')
@section('main')

<p><code><?= basename(__FILE__) ?></code></p>
<p>Have a look at <h3><code>app/views/index</code></h3> and <code>app/views/template/main</code></p>
<!-- ??? -->

<h2>This page requires less.</h2>
<p>Live edit your display in <code>project.less</code></p>
<h2>Use Bower to install bootstrap</h2>
	<h1><input type="text"><button class="btn-primary">Search</button></h1>

	<h2><a href="https://github.com/twitter/recess">https://github.com/twitter/recess</a></h2>
	<h3>npm install recess -g</h3>
	<h4>bing</h4>
	<h5>blah</h5>
	<h6>bah</h6>
@stop

@section('secondary')
	<div class="one">one</div>
	<div class="two">two</div>
	<div class="three">three</div>
	<div class="four">4</div>
	<div class="five">5</div>
	<div class="six">6</div>
	<div class="sev">7</div>
	<p>gugyuygig</p>
	<p>yguyguiyi</p>
@stop