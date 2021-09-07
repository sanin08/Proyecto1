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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/product/show/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/product/list', 'App\Http\Controllers\ProductController@list')->name("product.list");
Route::delete('/product/destroy/{id}', 'App\Http\Controllers\ProductController@destroy')->name("product.destroy");
