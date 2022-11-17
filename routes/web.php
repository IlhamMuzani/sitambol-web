<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\GambarController;

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
    if (Auth::check()) {
        return redirect('home');
    } else {
        return view('auth/login_new');
    }
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('kecamatan_kelurahan', [KecamatanController::class, 'index'])->name('kecamatan_kelurahan');
Route::get('/kelurahan.index', [App\Http\Controllers\KelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('/bengkel.index', [App\Http\Controllers\BengkelController::class, 'index'])->name('bengkel.index');
Route::resource('/bengkel', BengkelController::class);
Route::get('deleteGambar/{id}', [GambarController::class, 'deleteGambar']);
Route::resource('/kelurahan', KelurahanController::class);