<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::prefix('/category')->group(function () {

    Route::get("/all", [CategoryController::class, 'index']);
    Route::post("/create", [CategoryController::class, 'store']);
    Route::delete("/delete", [CategoryController::class, 'destroy']);
    Route::put("/update", [CategoryController::class, 'update']);
});
Route::prefix('/product')->group(function () {

    Route::get("/all", [ProductController::class, 'index']);
    Route::post("/create", [ProductController::class, 'store']);
    Route::delete("/delete", [ProductController::class, 'destroy']);
    Route::put("/update", [ProductController::class, 'update']);
});
Route::prefix('/size')->group(function () {

    Route::get("/all", [SizeController::class, 'index']);
    Route::post("/create", [SizeController::class, 'store']);
    Route::delete("/delete", [SizeController::class, 'destroy']);
    Route::put("/update", [SizeController::class, 'update']);
});
