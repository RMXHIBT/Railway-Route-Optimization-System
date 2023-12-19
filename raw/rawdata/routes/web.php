<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RailrouteController;

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





Route::get('/', 'App\Http\Controllers\RailrouteController@home');

Route::get('/user_login', 'App\Http\Controllers\RailrouteController@ulogin');

Route::get('/ucreate', 'App\Http\Controllers\RailrouteController@ucreate');

Route::get('/Au_or_not', [RailrouteController::class , 'Au_or_not']);

Route::post('/new_Account', [RailrouteController::class , 'new_Account']);