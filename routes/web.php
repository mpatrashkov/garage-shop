<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', "HomeController")->name("home");

Route::get('/products/{category?}', "ProductsController")->name("products");

Route::get('/contact-us', "ContactUsController")->name("contact-us");

Route::get('/contact-us/sent', "ContactUsController@showSent");

Route::resource('/request', "RequestController")->only(["store"]);

Route::get('/product/{id}/{slug?}', 'ProductController@detail')
    ->name('product.detail');
