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

Route::get('home', function (){
    return view('front/home');
});

/*Route::get('/shop', 'HomeController@shop');*/

Route::get('/products', function (){
    return view('front/shop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function () {

    Route::get('/', function () {
            return view('admin.index');
    })->name('admin.index');

    Route::POST('admin/store','AdminController@store');
    Route::get('/admin', 'AdminController@index');

    Route::resource('product', 'ProductsController');
});
