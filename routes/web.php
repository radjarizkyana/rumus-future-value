<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('investasi/index');
});

Route::get('/', [InvestasiController::class, 'index'])->name('investasi.index');
Route::post('/hitung', [InvestasiController::class, 'hitung'])->name('investasi.hitung');
