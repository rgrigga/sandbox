<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="laravel tutorial example">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lar.dev</title>
		<link rel="stylesheet/less" href="{{asset('/assets/less/pense.less')}}">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="/assets/js/less-1.5.0.min.js"></script>
		<script type="text/javascript">
		     less.env = "development";
		     less.watch();
		</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="../../assets/js/html5shiv.js"></script>
  <script src="../../assets/js/respond.min.js"></script>
<![endif]-->        
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
    <div class="page-wrapper">
        
        <div class="page-header">
            <h1>{{$pagetitle}}</h1>
        </div>
        
        <div class="main">
            @yield('main')
        </div>
        <div class="secondary">
            @yield('secondary')            
        </div>

    </div>
</div>

<!-- STOP EDITING -->
<div class="dev">
<?php
$end=microtime(true);
echo $end-$start."<hr>";
?>	
</div>


     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </body>
</html>