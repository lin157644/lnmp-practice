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

Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'post.index'
]);

Route::get('/post/create', [
    'uses' => 'PostController@create',
    'as' => 'post.create'
]);

Route::get('/post/{id}', [
    //{} 傳變數
    'uses' => 'PostController@show',
    'as' => 'post.show'
]);

Route::post('/post', [
    'uses' => 'PostController@store',
    'as' => 'post.store'
]);

Route::get('/post/{id}/delete', [
    'uses' => 'PostController@destroy',
    'as' => 'post.destroy'
]);