<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix("admin")->group(function(){
Route::get('/allproduct',[App\Http\Controllers\ApiController::class,'index']);
Route::post('/saveproduct',[App\Http\Controllers\ApiController::class,'store']);
Route::post('/uploadimage',[App\Http\Controllers\ApiController::class,'uploadimage']);
Route::get('/editproduct/{id}',[App\Http\Controllers\ApiController::class,'show']);
Route::get('/updateproduct/{id}',[App\Http\Controllers\ApiController::class,'update']);
Route::get('/uploadimage/{id}',[App\Http\Controllers\ApiController::class,'updateimage']);

});



