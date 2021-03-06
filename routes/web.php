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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
// Route::get('/confirm', 'PagesController@getConfirm');
Route::post('/confirm', 'PagesController@postConfirm');
Route::post('/mail', 'PagesController@postMail');
Route::get('/mail', 'PagesController@getMail');
Route::get('/app1', 'PagesController@getApp1');
Route::get('/app2', 'PagesController@getApp2');
Route::get('/app3', 'PagesController@getApp3');
Route::get('/app4', 'PagesController@getApp4');