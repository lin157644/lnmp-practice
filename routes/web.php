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

Route::view('/', 'index')->name('index');

Route::view('/profile', 'profile')->name('profile.index');
/*Route::get('/profile', [
    'uses' => 'BlogController@profile',
    'as' => 'blog.create'
]);*/

Route::view('/projects/index', 'projects.index')->name('projects.index');
Route::view('/projects/discordbot', 'projects.discordbot')->name('projects.discordbot');
Route::view('/projects/dormnet', 'projects.dormnet')->name('projects.dormnet');
Route::view('/projects/lnmp', 'projects.lnmp')->name('projects.lnmp');

Route::view('/contact', 'contact')->name('contact');

//Blog Starts Here
Route::get('/blog', [
    'uses' => 'BlogController@index',
    'as' => 'blog.index'
]);

Route::get('/blog/create', [
    'uses' => 'BlogController@create',
    'as' => 'blog.create'
]);

Route::get('/blog/{id}', [
    //{} 傳變數
    'uses' => 'BlogController@show',
    'as' => 'blog.show'
]);

Route::post('/blog', [
    'uses' => 'BlogController@store',
    'as' => 'blog.store'
]);

Route::get('/blog/{id}/delete', [
    'uses' => 'BlogController@destroy',
    'as' => 'blog.destroy'
]);