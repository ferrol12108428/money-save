<?php

use App\Http\Controllers\TabunganController;
use App\Models\Tabungan;
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


Route::get('/',[TabunganController::class, 'index'])->name('index');
Route::get('/create',[TabunganController::class, 'create'])->name('create');
Route::post('/store',[TabunganController::class, 'store'])->name('store');

//Route delete
Route::post('/delete/{id}', [TabunganController::class, 'delete'])->name('delete');

//Route edit
Route::get('/indexEdit/{id}', [TabunganController::class, 'indexEdit'])->name('indexEdit');
Route::post('/update/{id}', [TabunganController::class, 'update'])->name('update');