<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarDetailsController;
use App\Http\Controllers\CarProsConsController;
use App\Http\Controllers\UserOrdersController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['api'])->prefix('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/show', [UserController::class, 'show']);    
});


Route::resource('/car-details', CarProsConsController::class);
Route::post('/car-details/{id}/update', [CarDetailsController::class, 'update']);
Route::resource('/carproscons', CarProsConsController::class);
Route::resource('/userorders', UserOrdersController::class);


// Route::get('/car-details', [CarDetailsController::class, 'index']);
// Route::post('/car-details', [CarDetailsController::class, 'store']);
// Route::post('/car-details/{id}', [CarDetailsController::class, 'show']);
// Route::post('/car-details/{id}/update', [CarDetailsController::class, 'update']);
// Route::delete('/car-details/{id}', [CarDetailsController::class, 'destroy']);
