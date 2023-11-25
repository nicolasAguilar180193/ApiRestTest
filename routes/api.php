<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
	Route::post('user/register', ['uses' => 'UserController@register']);
	Route::post('user/login', ['uses' => 'UserController@login']);
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers', 'middleware' => ['auth:sanctum']], function () {
	Route::apiResource('customers', CustomerController::class);
	Route::apiResource('invoices', InvoiceController::class);
	Route::post('invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);
	Route::post('user/logout', ['uses' => 'UserController@logout']);
});
