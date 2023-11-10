<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FilmController;

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

Route::get('/actors', [ActorController::class, 'actors']);
Route::get('/actors/name/{firstname}', [ActorController::class, 'actorsbyFirstname']);
Route::get('/actors/count/all', [ActorController::class, 'actorsCountbyName']);
Route::get('/actors/count/name/{firstname}', [ActorController::class, 'actorsCountbyFirstname']);
Route::get('/actors/name/{firstname}/{lastname}', [ActorController::class, 'actorsbyName']);
Route::get('/actors/count', [ActorController::class, 'actorsCount']);

Route::get('/countries/v4', [CountryController::class, 'countriesinV4']);

Route::get('/films/cost/{min}/{max}', [FilmController::class, 'filmCosts']);
