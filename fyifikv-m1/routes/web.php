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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home_']);
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('/', [App\Http\Controllers\ProductController::class, 'slaiderItems']);
Route::get('/catalog', [App\Http\Controllers\ProductController::class, 'showcatalog']);
Route::get('/catalog/{god?}/{sort?}', [App\Http\Controllers\ProductController::class, 'GodItem']);
Route::get('/catalog/{name?}/{sort?}', [App\Http\Controllers\ProductController::class, 'NameItem']);
Route::get('/catalog/{price?}/{sort?}', [App\Http\Controllers\ProductController::class, 'PriceItem']);
Route::get('/singlitem/{id}', [App\Http\Controllers\ProductController::class, 'singlproduct']);


Route::get('/adminadd', [App\Http\Controllers\AdminaaddController::class, 'createitem']);
Route::post('/adminadd', [App\Http\Controllers\AdminaaddController::class, 'additem'])->name('adminadd');


Route::get('/basket',[App\Http\Controllers\BasketController::class, 'baskett'])->name('basket');
Route::get('/basket/{id?}',[App\Http\Controllers\BasketController::class, 'productt']);
Route::get('/basket/{id?}/delete',[App\Http\Controllers\BasketController::class, 'deletebasket']);

// Route::get('/ludi', [App\Http\Controllers\LudiController::class, 'spisokludi']);


