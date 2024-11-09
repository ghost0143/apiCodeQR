<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QrCodeGenerationController;
use App\Http\Controllers\QrCodeSearchController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('qrcodes', QrcodeController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/generate-qrcode', [QrCodeGeneratorController::class, 'generate']);

Route::get('/qrcodes/search', [QrCodeSearchController::class, 'search']);
Route::get('/qrcodes', [QrCodeSearchController::class, 'paginate']);


