<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('addproduct',[ProductController::class,'addproduct']);
Route::get('productlist',[ProductController::class,'productlist']);
Route::delete('delete/{id}',[ProductController::class,'delete']);
Route::get('getsingleproduct/{id}',[ProductController::class,'getsingleproduct']);
Route::post('updateproduct/{id}',[ProductController::class,'updateproduct']);