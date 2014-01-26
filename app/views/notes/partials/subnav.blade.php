
<h4>Subnav</h4>
<nav>
	<ul>
		<li>
			@foreach($links as $link)
			<a href="{{$link['url']}}">{{$link['name']}}</a>	
			@endforeach
		</li>
	</ul>
</nav>