<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

Route::get('/', [indexController::class,'home']);
Route::get('/directores', [indexController::class,'directores']);
Route::get('/docentes', [indexController::class,'docentes']);
Route::get('/personalApoyo', [indexController::class,'personalApoyo']);
Route::get('/personalUSAE', [indexController::class,'personalUSAE']);
Route::get('/plazaEstatal', [indexController::class,'plazaEstatal']);
Route::get('/plazaEstatalpersonalapoyo', [indexController::class,'plazaEstatalPersonal']);
Route::get('/plazaFederal', [indexController::class,'plazaFederal']);
Route::get('/plazaFederalpersonalapoyo', [indexController::class,'plazaFederalPersonal']);
Route::get('/AI', [indexController::class,'AI']);
Route::get('/EA', [indexController::class,'EA']);
Route::get('/INF', [indexController::class,'INF']);
Route::get('/PDPD', [indexController::class,'PDPD']);
Route::get('/PL', [indexController::class,'PL']);
Route::get('/SP', [indexController::class,'SP']);

