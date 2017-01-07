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

use App\TrialBalanceEntry;

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/trial_balance', function()
{
	$entries = TrialBalanceEntry::select('entry_time as Date','accounts.name as Account','category as Category','amount as Amount')->join('accounts', 'trialBalanceEntries.account_id', '=', 'accounts.id')->get();
	return View::make('trial_balance', [
		'entries' => $entries
	]);
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