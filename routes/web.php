<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth']], function () {

        Route::resource('staff', 'StaffController');
        Route::resource('rekanan', 'RekananController');
        Route::resource('supplaier', 'SupplaierController');
        Route::resource('produk', 'ProdukController');
        Route::resource('asset', 'AssetController');

});
