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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('hello', 'HelloWorldController@index');

Route::get('contact', 'PagesController@contact');

Route::get('people', 'PagesController@people');

Route::get('register', 'UsersController@register');

Route::post('user/save', 'UsersController@save');
