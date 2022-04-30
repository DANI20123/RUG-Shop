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
|avatar
*/
Route::get('/avatar',[\App\Http\Controllers\MainController::class,'avatar'])->name('avatar');
Route::get('/help',[\App\Http\Controllers\MainController::class,'help'])->name('help');
Route::get('/',[\App\Http\Controllers\MainController::class,'login'])->name('login');
Route::get('/info',[\App\Http\Controllers\MainController::class,'info'])->name('info');
Route::get('/Light',[\App\Http\Controllers\MainController::class,'Light'])->name('Light');
Route::get('/home',[\App\Http\Controllers\MainController::class,'home'])->name('home');
Route::get('/error',[\App\Http\Controllers\MainController::class,'home'])->name('error');
Route::get('/News',[\App\Http\Controllers\MainController::class,'News'])->name('News');
Route::get('/settings',[\App\Http\Controllers\MainController::class,'settings'])->name('settings');
Route::get('register',[\App\Http\Controllers\MainController::class,'register'])->name('register');
Route::post('/home/page',[\App\Http\Controllers\MainController::class,'processing']);
Route::post('/settings/save',[\App\Http\Controllers\MainController::class,'saveSettings']);
Route::post('/Registration',[\App\Http\Controllers\MainController::class,'Registration']);
