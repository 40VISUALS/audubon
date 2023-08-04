<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [HelloController::class, 'helloWorld']);
Route::get('/', [BirdController::class, 'audubonSociety']);
Route::post('/save-sighting', [BirdController::class, 'saveAudubonSociety']);
Route::any('/display-all-sightings', [BirdController::class, 'displayAllSightings']);
//Route::get('/', [BirdController::class, 'displayAllSightings']);