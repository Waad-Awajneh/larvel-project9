<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpostController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LifestyleController;
use App\Http\Controllers\TpostController;

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

Route::get('/GetTpost', [TpostController::class, 'index']);
Route::post('/addTpost', [TpostController::class, 'store']);


Route::get('/GetPopular', [PopularController::class, 'index']);
Route::post('/addPopular', [PopularController::class, 'store']);

Route::get('/GetGallery', [GalleryController::class, 'index']);
Route::post('/addGallery', [GalleryController::class, 'store']);

Route::get('/GetLifestyle', [LifestyleController::class, 'index']);
Route::post('/addLifestyle', [LifestyleController::class, 'store']);


Route::get('/GetHero', [HeroController::class, 'index']);
Route::post('/addHero', [HeroController::class, 'store']);