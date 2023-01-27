<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/create', [App\Http\Controllers\HomeController::class,'create'])->name('create')->middleware('verified');
Route::post('/create', [App\Http\Controllers\HomeController::class,'store'])->name('store')->middleware('verified');
Route::post('/destroy/{id}', [App\Http\Controllers\HomeController::class,'destroy'])->name('destroy')->middleware('verified');
Route::delete('/{id}',[App\Http\Controllers\HomeController::class,'destroy'])->name('destroy')->middleware('verified');

/*
|--------------------------------------------------------------------------
| Web Routes for welcome (anuncios or contador)
|--------------------------------------------------------------------------
|
*/
Route::get('/', [App\Http\Controllers\indexController::class, 'avisos'])->name('welcome');
