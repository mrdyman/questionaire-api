<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiMahasiswaController;
use App\Http\Controllers\api\ApiAuthController;
use App\Http\Controllers\api\ApiSoalController;
use App\Http\Controllers\api\ApiJawabanController;
use App\Http\Controllers\api\ApiResultController;

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

//? public Routes
Route::post('/login', [ApiAuthController::class, 'login']);
Route::get('/soal', [ApiSoalController::class, 'index']);
Route::post('/jawaban', [ApiJawabanController::class, 'store']);
Route::post('/result', [ApiResultController::class, 'store']);

//? Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [ApiAuthController::class, 'logout']);
    Route::get('/mahasiswa', [ApiMahasiswaController::class, 'index']);
    Route::post('/mahasiswa', [ApiMahasiswaController::class, 'store']);
    Route::delete('/mahasiswa', [ApiMahasiswaController::class, 'destroy']);
    
    Route::post('/soal', [ApiSoalController::class, 'store']);

    Route::get('/jawaban', [ApiJawabanController::class, 'index']);
    Route::delete('/jawaban', [ApiJawabanController::class, 'destroy']);

    Route::get('/result', [ApiResultController::class, 'index']);
});
