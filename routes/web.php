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
Route::get('/confirm-payment', 'FrontEndController@confirm_payment')->name('cpayment');
Route::get('/flush-cart', 'FrontEndController@flushCart')->name('fcart');
Route::get('/check-status', 'FrontEndController@checkStatus')->name('cStatus');
Route::post('/check-purchase', 'FrontEndController@checkPurchase')->name('check_purchase');
Route::post('/upload-payment', 'FrontEndController@upload_payment')->name('upayment');

Route::post('/add-to-cart', [
    'uses' => 'FrontEndController@addToCart',
    'as' => 'cart.store'
]);
Route::post('/pay', [
    'uses' => 'FrontEndController@proceed',
    'as' => 'proceed'
]);
Route::get('/dd', function () {
     return dd(session()->all());
});


Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::get('users', [
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);

    Route::get('user/create', [
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);

    Route::post('user/store', [
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);

    Route::get('/user/admin/{id}', [
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ]);

    Route::get('/user/gudang/{id}', [
        'uses' => 'UsersController@gudang',
        'as' => 'user.gudang'
    ]);

    Route::get('/user/pemasaran/{id}', [
        'uses' => 'UsersController@pemasaran',
        'as' => 'user.pemasaran'
    ]);

    Route::get('/user/delete/{id}', [
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);
    ////////////////////////////////////////////////////////////////
    Route::get('/products', [
        'uses' => 'ProductsController@index',
        'as' => 'products'
    ]);

    Route::get('/product/create', [
        'uses' => 'ProductsController@create',
        'as' => 'product.create'
    ]);

    Route::post('/product/store', [
        'uses' => 'ProductsController@store',
        'as' => 'product.store'
    ]);

    Route::get('/product/edit/{id}', [
        'uses' => 'ProductsController@edit',
        'as' => 'product.edit'
    ]);

    Route::post('/product/update/{id}', [
        'uses' => 'ProductsController@update',
        'as' => 'product.update'
    ]);

    Route::get('/product/delete/{id}', [
        'uses' => 'ProductsController@destroy',
        'as' => 'product.delete'
    ]);
    ///////////////////////////////////////////////////////////

    Route::get('/payment/confirm', [
        'uses' => 'PaymentsController@confirm',
        'as' => 'payment.confirm'
    ]);

    Route::get('/payment/confirm/{id}', [
        'uses' => 'PaymentsController@confirm_pay',
        'as' => 'payment.confirm_pay'
    ]);

    Route::get('/order/process', [
        'uses' => 'PurchaseOrdersController@process',
        'as' => 'purchase.process'
    ]);

    Route::get('/payment/process/{id}', [
        'uses' => 'PurchaseOrdersController@processed',
        'as' => 'purchase.processed'
    ]);

    Route::get('/order/shipping', [
        'uses' => 'PurchaseOrdersController@shipping',
        'as' => 'purchase.shipping'
    ]);

    Route::get('/order/complete/{id}', [
        'uses' => 'PurchaseOrdersController@complete',
        'as' => 'purchase.complete'
    ]);

});

