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

Route::get('/', 'frontEndController@banner')->name('banner');
Route::get('/contact', 'frontEndController@contact')->name('contact');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'aboutController@about')->name('about');
Route::get('/profile', 'myuserController@profile')->name('profile');

Route::get('/profile/edit', 'myuserController@edit')->name('edit');
Route::post('/user/update', 'myuserController@update')->name('update');
Route::get('/backend_contact', 'HomeController@backend_contact')->name('backend_contact');
Route::get('/backend/contact/delete/{id}', 'HomeController@contact_delete')->name('contact.delete');


Route::resource('banner', 'bannerController');
Route::resource('header', 'headerController');
Route::resource('client', 'clientController');
Route::resource('team', 'teamController');
Route::resource('portfolio', 'portfolioController');
Route::resource('mycontact', 'contactController');