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
// Route::get('/ludi', [App\Http\Controllers\LudiController::class, 'spisokludi']);


