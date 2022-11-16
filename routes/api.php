<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpostController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\DiscoverController;

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


Route::get('/Getdescover', [DiscoverController::class, 'index']);
Route::post('/addDescover', [DiscoverController::class, 'store']);

Route::get('/GetWorld', [WorldController::class, 'index']);
Route::post('/addWorld', [WorldController::class, 'store']);


Route::get('/GetPpost', [PpostController::class, 'index']);
Route::post('/addPpost', [PpostController::class, 'store']);

// Route::get('/Getdescover', [DiscoverController::class, 'index']);
// Route::post('/addDescover', [DiscoverController::class, 'store']);