<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KecamatanController;
use App\Http\Controllers\Api\KelurahanController;
use App\Http\Controllers\Api\BengkelController;
use App\Http\Controllers\Api\GambarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kecamatanList', [KecamatanController::class, 'kecamatanList']);
Route::post('kecamatanSearch', [KecamatanController::class, 'kecamatanSearch']);

Route::get('kelurahanAll', [KelurahanController::class, 'kelurahanAll']);
Route::get('kelurahanList/{id}', [KelurahanController::class, 'kelurahanList']);
Route::post('kelurahanSearch', [KelurahanController::class, 'kelurahanSearch']);

Route::get('bengkelAll', [BengkelController::class, 'bengkelAll']);
Route::get('bengkelList/{id}', [BengkelController::class, 'bengkelList']);
Route::get('bengkelDetail/{id}', [BengkelController::class, 'bengkelDetail']);
Route::post('bengkelSearch', [BengkelController::class, 'bengkelSearch']);

Route::get('gambarList/{id}', [GambarController::class, 'gambarList']);