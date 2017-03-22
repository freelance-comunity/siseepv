<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', function(){
	return view('front-end.index');
});

Route::get('/company', function(){
	return view('front-end.company');
});

Route::get('/projects', function(){
	return view('front-end.projects');
});

Route::get('/organization', function(){
	return view('front-end.organization');
});
