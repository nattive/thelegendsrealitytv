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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/vote', 'VoteController@index')->name('Vote');
Route::post('/', 'VoteController@store')->name('Vote.store');
Route::get('/thankyou', 'VoteController@thank')->name('Vote.thank');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/pay', 'PaymentController@handleGatewayCallback')->name('callback');


Route::get('/profile/{id}', 'ContestantController@index')->name('Contestant.index'); 




//Admin
Route::get('/Admin', 'AdminController@index')->name('admin.index');           
Route::post('/Admin/edit/', 'AdminController@update')->name('admin.update');           
//Route::put('/Admin/edit/{id}', 'AdminController@update')->name('admin.update');           
Route::get('/Admin/list', 'AdminController@list')->name('admin.list');           
Route::get('/Admin/create', 'AdminController@store')->name('admin.store');           
Route::delete('/Admin/destroy', 'AdminController@destroy')->name('admin.destroy');           

				 // Login route

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
