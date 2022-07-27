<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/', function () {
//     return view('pages.master');
// })->middleware('auth');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route mekanik servesi

//route mekanik servesi


Route::get('/mekanik/index',[MekanikController::class, 'index']);
Route::get('/mekanik/form',[MekanikController::class, 'create']);
Route::post('/mekanik/store',[MekanikController::class, 'store']);
Route::get('/mekanik/edit/{id}',[MekanikController::class, 'edit']);
Route::put('/mekanik/{id}',[MekanikController::class, 'update']);
Route::delete('/mekanik/{id}',[MekanikController::class, 'destroy']);


Route::get('/transaksi/index',[TransaksiController::class, 'index']);
Route::get('/transaksi/form',[TransaksiController::class, 'create']);
Route::post('/transaksi/store',[TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}',[TransaksiController::class, 'edit']);
Route::put('/transaksi/{id}',[TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}',[TransaksiController::class, 'destroy']);
