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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/bitm', function () {
////    return  "Hello Bitm";
//    return view('demo');
//});
//
//Route::get('/category/add', function () {
//   return  "I am in category add";
//});

Route::get('/', 'WelcomeController@index');
Route::get('/support', 'WelcomeController@support');
Route::get('/about', 'WelcomeController@about');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/contact', 'WelcomeController@contact');