<?php

use App\Http\Controllers\CompanyApiController;
use App\Http\Controllers\EmployeeApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/companies')->group(function () {
    Route::get('/', [CompanyApiController::class, 'index']);
    Route::post('/', [CompanyApiController::class, 'store']);
    Route::prefix('/{company}')->group(function () {
        Route::get('/', [CompanyApiController::class, 'show']);
        Route::put('/', [CompanyApiController::class, 'update']);
        Route::delete('/', [CompanyApiController::class, 'destroy']);
    });
});
Route::prefix('/employees')->group(function () {
    Route::get('/', [EmployeeApiController::class, 'index']);
    Route::post('/', [EmployeeApiController::class, 'store']);
    Route::prefix('/{employee}')->group(function () {
        Route::get('/', [EmployeeApiController::class, 'show']);
        Route::put('/', [EmployeeApiController::class, 'update']);
        Route::delete('/', [EmployeeApiController::class, 'destroy']);
    });
});
