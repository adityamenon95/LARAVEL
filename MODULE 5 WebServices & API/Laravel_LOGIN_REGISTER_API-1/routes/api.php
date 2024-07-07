<?php

use App\Http\Controllers\AuthuserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::post('/Register',[AuthuserController::class, 'register']);

Route::post('/Login',[AuthuserController::class, 'login']);
