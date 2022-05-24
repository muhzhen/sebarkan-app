<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;

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



Route::get('/masuk', [MasukController::class, 'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/generator', [App\Http\Controllers\GeneratorUndangan::class, 'index'])->middleware('auth');
Route::post('/generator/simpan', [App\Http\Controllers\GeneratorUndangan::class, 'store'])->middleware('auth')->name('simpanurl');
Route::get('/generator/hapus/{id}', [App\Http\Controllers\GeneratorUndangan::class, 'hapus'])->middleware('auth')->name('hapusurl');
Route::get('/generator/lihat/{nama}', [App\Http\Controllers\GeneratorUndangan::class, 'lihat'])->name('lihaturl');
