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


Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/cart', 'FrontEndController@cart')->name('cart');
Route::get('/shipping', 'FrontEndController@shipping')->name('shipping');
Route::get('/payment', 'FrontEndController@payment')->name('payment');
Route::get('/confirm-payment', 'FrontEndController@confirm_payment')->name('cpayment');

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes(['register' => false]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
