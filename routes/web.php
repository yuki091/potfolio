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

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/home', 'ClothController@index');
Route::post('/home', 'ClothController@home');


Route::get('/post', 'PostController@index');
Route::post('/upload', 'PostController@upload');

// Route::group(['prefix' => 'user'], function() {
 
//     Route::get('/signup',[
//     'uses' => 'UserController@getSignup',
//     'as' => 'signup'
//     ]);
   
//     Route::post('/signup',[
//     'uses' => 'UserController@postSignup',
//     'as' => 'signup'
//     ]);
   
//     Route::get('/home',[
//     'uses' => 'UserController@getProfile',
//     'as' => 'home'
//     ]);
// });
  
