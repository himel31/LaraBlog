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

Route::get('/', ['as' => 'home_path', 'uses' => 'BlogsController@home']);
Route::get('/blog/add', ['as' => 'add_blog', 'uses' => 'BlogsController@new_blog_form']);
Route::post('/blog/add', ['as' => 'blog_store', 'uses' => 'BlogsController@blog_store']);
Route::get('/blog/{blog_id}', ['uses' => 'BlogsController@view']);
Route::post('/comment/add', ['as' => 'add_comment', 'uses' => 'BlogsController@add_comment']);





Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/contact-us', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::post('/contact-us', ['as' => 'contact_store', 'uses' => 'PagesController@contact_store']);

