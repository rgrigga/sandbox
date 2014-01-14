<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="laravel sandbox example">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lar.dev</title>
		<link rel="stylesheet/less" href="{{asset('/assets/less/project.less')}}">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="/assets/js/less-1.5.0.min.js"></script>
		<script type="text/javascript">
		     less.env = "development";
		     less.watch();
		</script>
    </head>
    <body>
    <style>
    .dev{
    	background-color: rgb(0,50,50);
        color:rgb(200,230,250);
        padding: 5px;
    }

    </style>

<?php
$start=microtime(true);
?>

<div class="container">
<<<<<<< HEAD
    <h1>{{$pagetitle or "Page Title"}}</h1>
    @yield('main')
=======
    <div class="page-wrapper">
        <span class="badge">div.page-wrapper</span>
        <div class="page-header">
            <h1>{{$pagetitle}}</h1>
        </div>
        
        <div class="main">
            <span class="badge">div.main</span>
            @yield('main')
        </div>
        <div class="secondary">
            <span class="badge">div.secondary</span>
            @yield('secondary')            
        </div>
>>>>>>> 584823ed6f9342b9fcb2731f01b5aded3d458bbe

    </div>
</div>

<!-- STOP EDITING -->
<div class="dev">
    <span class="badge">div.dev</span>
<?php
$end=microtime(true);
echo $end-$start."<hr>";
?>	
<input type="text"><button class="btn-primary">Search</button>
</div>


     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </body>
</html>