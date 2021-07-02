<?php

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
Route::get('/event', [\App\Http\Controllers\Api\EventController::class, 'index']);
Route::post('/event/create', [\App\Http\Controllers\Api\EventController::class, 'store']);
Route::get('/event/lastest', [\App\Http\Controllers\Api\EventController::class, 'lastest']);
