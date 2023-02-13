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
/*
|--------------------------------------------------------------------------
| Web Routes for admin (avisos)
|--------------------------------------------------------------------------
|
*/
Route::get('/avisos', [App\Http\Controllers\HomeController::class, 'avisos'])->name('avisos')->middleware('verified');
Route::get('/edit/{images}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit')->middleware('verified');
Route::get('/create', [App\Http\Controllers\HomeController::class,'create'])->name('create')->middleware('verified');
Route::post('/create', [App\Http\Controllers\HomeController::class,'store'])->name('store')->middleware('verified');
Route::post('/edit/{images}', [App\Http\Controllers\HomeController::class,'update'])->name('update')->middleware('verified');
Route::delete('/{images}',[App\Http\Controllers\HomeController::class,'destroy'])->name('destroy')->middleware('verified');
/*
|--------------------------------------------------------------------------
| Web Routes for admin (Personal)
|--------------------------------------------------------------------------
|
*/
Route::get('/Personal', [App\Http\Controllers\HomeController::class, 'Personal'])->name('Personal')->middleware('verified');
/*
|--------------------------------------------------------------------------
| Web Routes for admin (Directores)
|--------------------------------------------------------------------------
|
*/
Route::get('/Director', [App\Http\Controllers\HomeController::class, 'Director'])->name('Director')->middleware('verified');
Route::get('/createDirector', [App\Http\Controllers\HomeController::class, 'createDirector'])->name('createDirector')->middleware('verified');
Route::post('EnvioDatos', [App\Http\Controllers\HomeController::class, 'Insertar'])->name('Insertar')->middleware('verified');
Route::get('/editarDirector/{datos}', [App\Http\Controllers\HomeController::class, 'editar'])->name('editar')->middleware('verified');
/*
|--------------------------------------------------------------------------
| Web Routes for admin (Docentes)
|--------------------------------------------------------------------------
|
*/
Route::get('/Docente', [App\Http\Controllers\HomeController::class, 'Docente'])->name('Docente')->middleware('verified');

/*
|--------------------------------------------------------------------------
| Web Routes for welcome (anuncios and contador)
|--------------------------------------------------------------------------
|
*/
Route::get('/', [App\Http\Controllers\indexController::class, 'avisos'])->name('welcome');
Route::get('/directores', [App\Http\Controllers\indexController::class,'directores']);
Route::get('/docentes', [App\Http\Controllers\indexController::class,'docentes']);
Route::get('/personalApoyo', [App\Http\Controllers\indexController::class,'personalApoyo']);
Route::get('/personalUSAE', [App\Http\Controllers\indexController::class,'personalUSAE']);
Route::get('/plazaEstatal', [App\Http\Controllers\indexController::class,'plazaEstatal']);
Route::get('/plazaEstatalpersonalapoyo', [App\Http\Controllers\indexController::class,'plazaEstatalPersonal']);
Route::get('/plazaFederal', [App\Http\Controllers\indexController::class,'plazaFederal']);
Route::get('/plazaFederalpersonalapoyo', [App\Http\Controllers\indexController::class,'plazaFederalPersonal']);
Route::get('/AI', [App\Http\Controllers\indexController::class,'AI']);
Route::get('/EA', [App\Http\Controllers\indexController::class,'EA']);
Route::get('/INF', [App\Http\Controllers\indexController::class,'INF']);
Route::get('/PDPD', [App\Http\Controllers\indexController::class,'PDPD']);
Route::get('/PL', [App\Http\Controllers\indexController::class,'PL']);
Route::get('/SP', [App\Http\Controllers\indexController::class,'SP']);
Route::post('/editarDirector', [App\Http\Controllers\indexController::class, 'update'])->name('update');
