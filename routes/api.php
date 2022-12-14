<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiMapelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::resource('/kelas', KelasController::class);
Route::resource('/siswa', SiswaController::class);
Route::resource('/nilai_mapel', NilaiMapelController::class);
Route::get('/siswa/{id}/{nilai_id}', 'App\Http\Controllers\SiswaController@detail_nilai');
