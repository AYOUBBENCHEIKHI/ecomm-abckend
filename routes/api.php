<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::group(["middleware" => "auth:api"], function(){
     Route::apiResources([
        'products' =>  ProductController::class, 
        'categories' =>  CategoryController::class 
       ]);
       Route::get('/users',[UserController::class,"index"]);
       Route::get('/users/{id}',[UserController::class,"show"]);
       Route::put('/users/{id}',[UserController::class,"update"]);
       Route::delete('/users/{id}',[UserController::class,"destroy"]);
       Route::get('/my',[AuthenticationController::class,"my"]);
});


/*Route::group(["middleware" => "auth:api"], function(){
    //loug out
    Route::get('/logout',[AuthenficationController::class,"logout"]);


    Route::get('/users/{id}',[UserController::class,"show"]);
    Route::put('/users',[UserController::class,"update"]);
    Route::delete('/users',[UserController::class,"delete"]);
    Route::get('/user',[AuthenficationController::class,"user"]);

});
Route::get('/users',[UserController::class,"index"]);
Route::post('/users',[UserController::class,"store"]);*/
