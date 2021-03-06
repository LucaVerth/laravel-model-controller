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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about-us', 'PagesController@about')->name('about-us');

Route::get('/contacts', 'PagesController@contacts')->name('contacts');

Route::get('/pricing', 'PriceController@price')->name('pricing');

Route::get('/faq', 'FaqController@faq')->name('faq');
