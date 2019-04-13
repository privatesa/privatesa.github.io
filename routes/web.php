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

//This is the way that we can user Dynamic with URL
Route::get('/users/{id}/{name}' , function($id,$name){
    return 'This is user '.$name . ' With Id of '.$id;
});

*/



Route::get('/', 'PagesController@index');

//This is the way that we can redirect to another page via URL
Route::get('/about' ,'PagesController@about');
Route::get('/services' ,'PagesController@services');
Route::get('/photos','PagesController@photos');
Route::get('/photos/men','PagesController@menphotos');
Route::get('/photos/food','PagesController@foods');
Route::get('/photos/desserts','PagesController@dessertsfood');
Route::get('/photos/mainmeal','PagesController@mainmeal');
Route::get('/photos/drinks','PagesController@drinks');


Route::resource('posts','PostController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
