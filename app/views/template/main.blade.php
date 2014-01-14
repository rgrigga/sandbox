<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="laravel tutorial example">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lar.dev</title>
		<link rel="stylesheet/less" href="{{asset('/assets/less/pense.less')}}">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="/assets/js/less-1.4.1.min.js"></script>
		<script type="text/javascript">
		     less.env = "development";
		     less.watch();
		</script>
    </head>
    <body>
    <style>
    .dev{
    	background-color: red;
    }

    </style>

<?php
$start=microtime(true);
?>

<div class="container">
    <h1>{{$pagetitle or "Page Title"}}</h1>
    @yield('main')

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