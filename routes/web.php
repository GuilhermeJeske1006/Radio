<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@Index')->name('Index');
Route::post('/ouvinte', 'HomeController@store')->name('store');
Route::Delete('/ouvinte/{id}', 'HomeController@destroy')->name('destroy');
Route::put('/ouvinte/update/{id}', 'HomeController@update')->name('update');



