<?php

use App\Http\Controllers\DiskonController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\ShareController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;

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

// 
Route::get('pajaks', [PajakController::class, 'index']);
Route::post('pajaks', [PajakController::class, 'store']);
// 
Route::get('diskons', [DiskonController::class, 'index']);
Route::post('diskons', [DiskonController::class, 'store']);
// 
Route::get('shares', [ShareController::class, 'index']);
Route::post('shares', [ShareController::class, 'store']);