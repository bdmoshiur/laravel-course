<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','welcome');

Route::view('/', 'welcome', ['name' => 'Taylor']);

// Route::get('about','HomeController@index');
// Route::get('create','CreateController@create');

// Route::get('users','UserController@index'); 
// Route::get('create_user','UserController@create');
// Route::get('users/{id}','UserController@show'); 
// Route::get('users/{id}/delete','UserController@delete'); 
// Route::get('users/{id}/edit','UserController@edit'); 

Route::prefix('admin')->group(function(){

    Route::get('/users','UserController@index');

Route::get('/add-user','UserController@store');
Route::post('/create-user','UserController@create');


Route::any('/update-user','UserController@update');
Route::get('/show-user/{id}','UserController@show');
Route::get('/show-user-age/{name?}/{age?}','UserController@age')
                ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



});