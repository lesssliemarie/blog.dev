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

// Blog routes

Route::get('/', 'HomeController@showHome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/blog', 'HomeController@showBlog');

Route::get('/resume', 'HomeController@showResume');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/accessDenied', 'HomeController@accessDenied');

Route::resource('/posts', 'PostsController');
