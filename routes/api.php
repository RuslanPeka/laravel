<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\DataControllers;

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

// *** Моя вставка ***

// Не сработавший вариант:
// Route::prefix('test')->group(function () {
//     Route::get('/test', 'Test\Test@index');
// });

Route::prefix('test')->group(function () {
    Route::get('/test', [Test\Test::class, 'index']);
});

Route::prefix('customers')->group(function () {
    Route::get('/customers', [DataControllers\CustomersController::class, 'index']);
});

Route::prefix('goods')->group(function () {
    Route::get('/goods', [DataControllers\GoodsController::class, 'index']);
});

Route::prefix('orders')->group(function () {
    Route::get('/orders', [DataControllers\OrdersController::class, 'index']);
});

Route::prefix('payments')->group(function () {
    Route::get('/payments', [DataControllers\PaymentsController::class, 'index']);
});