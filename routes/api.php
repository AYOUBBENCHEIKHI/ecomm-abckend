<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/users',[UserController::class,"store"]);
Route::post('/login',[AuthenticationController::class,"login"]);
Route::get('/products',[ProductController::class,"index"]);
Route::get('/products/{id}',[ProductController::class,"show"]);
Route::get('/productsPg',[ProductController::class,"indexPagination"]); 
Route::get('/categories',[CategoryController::class,"index"]);  
Route::get('/categories/{id}',[CategoryController::class,"show"]);   
Route::group(["middleware" => "auth:api"], function(){
        //categories
        Route::post('/categories',[CategoryController::class,"store"]); 
        Route::put('/categories/{id}',[CategoryController::class,"update"]); 
        Route::delete('/categories/{id}',[CategoryController::class,"destroy"]); 
        //Product
        Route::post('/products',[ProductController::class,"store"]);
        Route::put('/products/{id}',[ProductController::class,"update"]);
        Route::delete('/products/{id}',[ProductController::class,"destroy"]);
        Route::post('/upload',[UploadController::class,"upload"]);
        //User
        Route::get('/users',[UserController::class,"index"]);
        Route::get('/users/{id}',[UserController::class,"show"]);
        Route::put('/users/{id}',[UserController::class,"update"]);
        Route::delete('/users/{id}',[UserController::class,"destroy"]);
        Route::get('/my',[AuthenticationController::class,"my"]);
});

