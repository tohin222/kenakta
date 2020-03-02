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
// fontend routes
Route::get('/index', 'indexController@fontend_home_index')->name('index');
Route::get('/fontendProduct', 'indexController@fontend_product_index')->name('fontendProduct');
Route::get('/fontendprotfoliot', 'indexController@fontend_protfolio_index')->name('fontendprotfoliot');
Route::get('/fontendblog', 'indexController@fontend_blog_index')->name('fontendblog');
Route::get('/fontendcontact', 'indexController@fontend_contact_index')->name('fontendcontact');





// backend routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('product', 'productController');
Route::resource('catagory', 'catagoryController');
Route::resource('brand', 'brandController');
Route::resource('featured', 'featuredController');