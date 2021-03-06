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

Route::get('/','NewsController@index');
Route::get('/news','NewsController@index');
Route::get('/about', function (){
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/news/{id}','NewsController@show');
