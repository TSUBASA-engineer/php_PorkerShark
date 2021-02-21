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

Route::GET('/','TopController@index');

Route::GET('/store','StoreController@store');

Route::POST('/registration','StoreController@registration');

Route::GET('/login','LoginController@login');

Route::POST('/input_login','LoginController@input_login');

Route::GET('my_page','MyPageController@my_page');

Route::GET('/signout','MyPageController@signout');

Route::GET('/delete','MyPageController@delete');

Route::GET('/hand_store','PorkerController@hand_store');