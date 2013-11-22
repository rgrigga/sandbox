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

Route::get('index',function(){
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

Route::get('/', function()
{
	return View::make('hello');
});