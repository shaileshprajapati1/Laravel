<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/product','allproduct');  
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::view('/addproduct', 'addproduct');
Route::post('/saveproduct', [App\Http\Controllers\ProductController::class, 'store']);
Route::any('/editproduct/{pid}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::any('/updateproduct/{pid}', [App\Http\Controllers\ProductController::class, 'update']);
Route::any('/deleteproduct/{pid}', [App\Http\Controllers\ProductController::class, 'destroy']);
