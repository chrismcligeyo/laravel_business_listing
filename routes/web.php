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

//Route::group(['middleware'=>'listings'], function(){
//
//}); //if was to assign middleware to group of routes

Route::get('/', 'ListingsController@index');

Auth::routes();

Route::resource('listings', 'ListingsController');

//    ->middleware('listings',['except' =>['index', 'show']]); //means wrap all functions in Listings controller in listings middleware except index and showfunction

Route::get('/dashboard', 'DashboardController@index');
