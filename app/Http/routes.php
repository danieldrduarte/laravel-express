<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/ola/{nome}', 'TestController@index');
//Route::get('/notas', 'TestController@notas');
//Route::get('/blog','PostsController@index');

Route::get('/', 'PostsController@index');

Route::get('admin/posts', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
Route::get('admin/posts/create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
Route::post('admin/posts/store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
