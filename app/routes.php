<?php

	function listpagenames($dir="notes"){
		$path='../app/views/'.$dir.'/';
		$minipath=str_replace('../app/views/', "", $path);
	    $mypages = array();
	    foreach (glob($path."*.blade.php") as $filename) {
	        $filename=str_replace($path, "", $filename);
	        $filename=str_replace(".blade.php", "", $filename);
	        array_push($mypages,$filename);
	    }
	    return $mypages;
	}

View::share('links',listpagenames('notes'));
               
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('bam', function()
{
	return View::make('bam');
});

Route::get('myindex',function(){
	$pagetitle="Index";
	return View::make('index')
	->with(compact('pagetitle'));
});

Route::get('notes/{page}',function($page){
	View::share('pagetitle',$page);
	// return $page;
	// function getPage($tag="",$path="")
	// {
		// die(var_dump("Hello"));
		// $brand="megacorp";
		
		// if(!$path && $brand){
			//global pages
			// $minipath='site/pages/';
			//company's pages
			// $minipath='site/'.$brand.'/';
			// $path='../app/views/'.$minipath;

			//path would now be like:
			//..app/views/site/gristech/
		// }

		//change this line:
		$path='../app/views/notes/';

		//do not change this line:
		$minipath=str_replace('../app/views/', "", $path);
	    


		$mypages=listpagenames('notes');

		if(empty($mypages)){
	    	// trigger_error("empty pages");
	    	$msg="$path is an empty directory.<br>";
			Session::flash('error', $msg);
			return $msg;
	    }



	    if(in_array($page, $mypages)){
	    	return View::make($minipath.$page)
	    	->with('links',$mypages)
	    	// ->nest('carousel','site.posts.carousel')
	    	;
	    }

	    // dd($mypages);
	    $msg="Could not find '$page' in $path.<br>";
		Session::flash('warning', $msg);
		$pagetitle=$page;
	    // return View::make('notes.index','$mypages');
	    
	    
		$links=array(
	    	['name'=>'home','url'=>'/'],
	    	['name'=>'notes','url'=>'/notes'],
	    );

		

	    return View::make('notes.home')
	    	->with(compact('links'))
	    	->with(compact('mypages'))
	    	->with(compact('pagetitle'))
		   	->nest('index','notes.index')
	    ;



	    // return($msg);
});

Route::get('notes',function(){
	$pagetitle="Dev Notes";
    return View::make('notes.index')
    ->with(compact('pagetitle','links'));
});

Route::get('rgrigga/{$page}',function($page){
    return View::make('Rgrigga::route($page)');
});

Route::get('angular', function()
{
	return View::make('angular');
});



Route::resource('fields', 'FieldsController');

Route::resource('comments', 'CommentsController');

Route::resource('photos', 'PhotosController');

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('scores', 'ScoresController');