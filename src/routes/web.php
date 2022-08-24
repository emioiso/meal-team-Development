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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/top',function(){
    return view('top');
});
Route::get('/register',function(){
    return view('/meals/create');
});
Route::get('/meals',function(){
    return view('/meals/list');
});
Route::get('/meals/{meal}','MealController@show');

Route::get('/meals/{meal}/edit',function(){
    return view('/meals/edit');
});
Route::get('/categoly',function(){
    return view('/categolies/list');
});
Route::get('/categoly/create',function(){
    return view('/categolies/create');
});
Route::get('/categoly/{categoly}',function(){
    return view('/categolies/meals');
});
Route::get('/categoly/{categoly}/edit',function(){
    return view('/categolies/edit');
});


