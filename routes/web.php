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

//Route::get('Home', function () {
//    return view('Home');
//});
//Route::get('/home', 'PagesController@about')->name('home');




Route::get('/', 'HomePageController@getHomePage');
Route::get('/Contact', 'ContactUsController@getContact');
Route::get('/Blog', 'BlogController@getBlog');
Route::get('/Checkout', 'CheckOutController@getCheckOut');
Route::get('/Shop', 'ShopController@getShop');
Route::get('/SingleProduct', 'SingleproductController@getSingle');