<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\DiscountController;

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

Route::resource('about', AboutController::class);
//Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('discounts', [
//    'middleware' => 'auth',
//    'uses' => 'App\Http\Controllers\DiscountController@index'
////    'uses' =>
//]);
Route::get('discounts', [DiscountController::class, 'index']);
