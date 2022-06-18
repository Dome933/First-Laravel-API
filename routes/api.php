<?php

use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\CustomersApiController;
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

//Posts
Route::get('/posts',[PostsApiController::class, 'index']);

Route::post('/posts',[PostsApiController::class, 'createNewPost']);

Route::put('/posts/{post}',[PostsApiController::class, 'updatePost']);

Route::delete('/posts/{post}',[PostsApiController::class, 'deletePost']);

//Customers

Route::get('/customers',[CustomersApiController::class, 'index']);

Route::post('/customers',[CustomersApiController::class, 'addNewCustomer']);

Route::put('/customers/{post}',[CustomersApiController::class, 'updateCustomer']);

Route::delete('/customers/{post}',[CustomersApiController::class, 'deleteCustomer']);
