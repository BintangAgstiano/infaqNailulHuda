<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\TingkatanKelasController;
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


Route::get('/',[DashboardController::class,'view']);

Route::get('/pemasukancreate',[PemasukanController::class,'create']);
Route::get('/pemasukanview',[PemasukanController::class,'index']);

Route::get('/pengeluaran',[PengeluaranController::class,'create']);
Route::get('/pengeluaranview',[PengeluaranController::class,'index']);

Route::get('/tingkatankelasview',[TingkatanKelasController::class,'index']);
Route::get('/tingkatankelas',[TingkatanKelasController::class,'create']);
Route::post('/tingkatankelas',[TingkatanKelasController::class,'store']);

Route::get('/auth',[AuthController::class,'auth']);