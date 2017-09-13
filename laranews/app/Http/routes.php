<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "Hi Guys ...";
    // return view('welcome');
});
Route::get('/admin/post', function () {
    return "Admin Is Here!";
    // return view('welcome');
});
Route::get('/contact', function () {
    return "Hi, I am Contact";
});

Route::get('/about', function () {
    return "Hi about page";
});
Route::get('/post/{id}', function ($id) {
    return "This is post Number ".$id;
});
Route::get('/post/{id}/{name}', function ($id, $nama) {
    return "This is post Number ".$id." ".$nama;
});

Route::get('/admin/post/example', array('as'=>'admin.home', function () {
	$url = route('admin.home');
    return "This url is : ".$url;
}));