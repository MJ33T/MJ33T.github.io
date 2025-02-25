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


/*
Route::get('/Hello', function () {
    return 'Hello World';
    
});

Route::get('/user/{id}', function($id){
    return 'This is the '.$id;
});

Route::get('/user/{id}/{name}', function($id, $name){
    return 'This is user '.$name. ' and the ID is '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
