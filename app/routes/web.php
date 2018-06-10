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

Route::get('/login', array('uses' => 'HomeController@showLogin'));
Route::get('/register', array('uses' => 'RegisterController@showRegister'));
Route::post('/register', array('uses' => 'RegisterController@doRegister'));
Route::get('/posts', array('uses' => 'PostsController@showPosts'));
Route::post('/posts', array('uses' => 'PostsController@doPosts'));
Route::post('/login', array('uses' => 'HomeController@doLogin'));