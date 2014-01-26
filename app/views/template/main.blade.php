<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="laravel sandbox example">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sandbox.dev</title>

		<link rel="stylesheet/less" href="{{asset('/assets/less/project.less')}}">

		<script src="//code.jquery.com/jquery.js"></script>
		<script src="/assets/js/less-1.5.0.min.js"></script>
		<script type="text/javascript">
		     less.env = "development";
		     less.watch();
		</script>
    </head>
    <body>

<?php
$start=microtime(true);
?>

<div class="container">
    <span class="badge div-badge">div.container</span>

    <header>
        <span class="badge div-badge">header</span>
                @if(Session::has('warning'))
                <div class="alert alert-warning">WARNING: {{Session::get('warning')}}</div>
                @endif
    </header>
    <div class="page-wrapper">
        <span class="badge div-badge">div.page-wrapper</span>
        <div class="page-header">
            @section('page-header')
            <span class="badge div-badge">div.page-header</span>

            <h1>{{isset($pagetitle)?$pagetitle : "Bam"}}</h1>
            @show
        </div>
        
        <div class="main">
            @section('main')
            <span class="badge div-badge">div.main</span>

                
            @show
        </div>
        <div class="secondary">
            <span class="badge div-badge">div.secondary</span>
            
            @section('secondary')
            <h3>Internal Links</h3>
<nav>
    <ul class="nav">
        @foreach ($links as $link)
        <li><a href="/notes/{{$link}}">{{$link}}</a></li>
        @endforeach
    </ul>
</nav>
    <h3>External Links</h3>
            <nav>
                <ul class="nav">

                    <li><a href="http://www.lesscss.org/#usage">Less Usage</a></li>
                    <li>
                        <a href="http://stackoverflow.com/questions/7289139/why-are-iframes-considered-dangerous-and-a-security-risk">iframe security</a>
                    </li>
                </ul>
            </nav>
            @show
        </div>

    </div>
</div>

<!-- STOP EDITING -->
<div class="dev">
    <span class="badge div-badge">div.dev</span>
<?php
$end=microtime(true);
echo $end-$start."<hr>";
?>	
<input type="text"><button class="btn-primary">Search</button>
</div>


     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </body>
</html>