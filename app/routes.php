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
	return View::make('pages.home');
});

Route::get('manhdt/{age}', function($age)
{
	return "My name is ManhDT, I'm 999" . $age . " year old";
});

Route::get('environment', function()
{
	return App::environment() . ". hostname: " . gethostname();
});

Route::get('checkdb', function()
{
	return 'db: ' . DB::connection()->getDatabaseName();
});

Route::get('check_auth', function()
{
	return Auth::check()? "logged in" : "guest";
});

Route::get('login', function()
{
	return View::make('pages.login');
});

Route::get('logout', 'UserController@Logout');
Route::post('auth', 'UserController@Auth');
Route::get('install_db', 'InstallController@DefaultDB');
Route::controller('user', 'UserController');
