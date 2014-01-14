<?php

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

Route::get('notes/{$page}',function($page){
    return View::make('Rgrigga::route($page)');
});

Route::get('notes',function(){
	$pagetitle="Dev Notes";
    return View::make('notes/xss')
    ->with(compact('pagetitle'));
});

Route::get('angular', function()
{
	return View::make('angular');
});



Route::resource('fields', 'FieldsController');

Route::resource('comments', 'CommentsController');

Route::resource('photos', 'PhotosController');

Route::get('hello', function()
{
	return View::make('hello');
});
<<<<<<< HEAD
Route::get('/',function(){
	return View::make('home');
});
=======

Route::resource('scores', 'ScoresController');
>>>>>>> 584823ed6f9342b9fcb2731f01b5aded3d458bbe
