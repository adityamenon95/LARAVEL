<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ImageUpload', function () {
    return view('ImageUpload');
});

Route::post('/ImageUpload', [ImageController::class, 'upload']);