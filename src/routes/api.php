<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
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


Route::get('/userWithAddress/{id}', [UserController::class, 'userWithAddress']);
Route::get('/userID/{id}',[UserController::class,'show']);

//Route::group(['middleware' => 'auth:sanctum'], function(){
//    Route::post('/purchase', [OrderController::class, 'purchase']);
//
// });
Route::get('/address/{request}', [AddressController::class, 'findAddress']);
//Route::get('/address/{id}', [AddressController::class, 'show']);
Route::post('/purchase', [OrderController::class, 'purchase'] );




Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);
Route::resource('addresses', AddressController::class);

