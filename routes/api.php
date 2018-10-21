<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', 'Auth\ApiRegisterController@register');
Route::post('/login', 'Auth\ApiLoginController@login');
Route::get('/me', 'Auth\MeController@me');
Route::post('/logout', 'Auth\ApiLogoutController@logout');
