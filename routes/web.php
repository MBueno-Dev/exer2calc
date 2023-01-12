<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
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

#Route::get('/', [HomeController::class, 'welcome']);
Route::get('/', 'App\Http\Controllers\HomeController@welcome');

#Route::get('/calculadora', [HomeController::class, 'calculadora']);
Route::get('/calculadora', 'App\Http\Controllers\HomeController@calculadora');

#Route::post('/calcular', [HomeController::class, 'calcular']);
Route::post('/calcular', 'App\Http\Controllers\HomeController@calcular');
