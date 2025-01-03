<?php

use App\Http\Controllers\FaceRecognitionController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//get criminals
Route::get('/criminals', [FaceRecognitionController::class, 'criminals']);
//get guests - pending BG check only
Route::get('/guests', [FaceRecognitionController::class, 'guests']);
//send result
Route::post('/save-bg-check-results', [FaceRecognitionController::class, 'saveBgCheckResults']);




























































































































































































































































Route::resource('tests', App\Http\Controllers\API\TestAPIController::class);





































