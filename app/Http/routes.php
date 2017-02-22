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
    Route::get('/auth/check',function () {
        if(Auth::check()){
            return "logado";
        }else{
            return "não logado";
        }
    });

    Route::get('/', 'PostsController@index');

//Criando rotas na mão
//    Route::get('login', 'Auth\AuthController@getLogin');
//    Route::post('login', 'Auth\AuthController@postLogin');
//    Route::get('logout', 'Auth\AuthController@logout');

    
//Gerando as rotas da controller toda
Route::controllers([
    'auth'      => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController'
]);


    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
        Route::group(['prefix' => 'posts'], function(){
            Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
            Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
            Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
            Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
            Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
            Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);
        });
    });

});


Route::auth();

Route::get('/home', 'HomeController@index');
