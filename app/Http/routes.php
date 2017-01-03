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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/trial_balance', function()
{
	return View::make('trial_balance');
});
Route::get('/reports', function()
{
	return View::make('reports');
});
Route::get('/accounts', function()
{
	return View::make('accounts');
});
Route::get('/messages', function()
{
	return View::make('messages');
});