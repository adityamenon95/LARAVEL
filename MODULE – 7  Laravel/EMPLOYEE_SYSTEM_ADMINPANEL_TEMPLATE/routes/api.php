<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/example', function () {
    return 'Hello, World!';
})->middleware('custom.auto');

// Applying middleware to a group of routes
Route::group(['middleware' => ['custom.auto']], function () {
    Route::get('/example1', function () {
        return 'Example 1';
    });

    Route::get('/example2', function () {
        return 'Example 2';
    });
});