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


Route::group(['middleware' => ['web']], function () {

  //Authentication routes
  Route::get('auth/login', 'Auth\AuthController@getLogin');
  Route::post('auth/login', 'Auth\AuthController@postLogin');
  Route::get('auth/logout', 'Auth\AuthController@getLogout');

  //Registration Routes
  Route::get('auth/register', 'Auth\AuthController@getRegister');
  Route::post('auth/register', 'Auth\AuthController@postRegister');



  Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])-> where('slug', '[\w\d\-\_]+');

  Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

  Route::get('contact', 'PagesController@getContact');

  Route::get('about', 'PagesController@getAbout');

  Route::get('home', 'PagesController@getHome');

  Route::resource('posts', 'PostController');


  Route::get('/', 'PagesController@getHome');
});
