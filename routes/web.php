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

// Route::get('/', function () {
//     return view('product/index');
// });

 Route::get('/')->name('home.index')->uses('HomeController@index');

Route::get('/product')->name('product.index')->uses('ProductController@index');
Route::get('/yajra')->name('yajra.index')->uses('ProductController@datatablesIndex');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
