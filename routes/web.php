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

Route::get('books/{id}','App\Http\Controllers\BookController@info');
Route::get('author/{id}','App\Http\Controllers\AuthorController@info');
Route::get('publisher/{id}','App\Http\Controllers\PublisherController@info');
