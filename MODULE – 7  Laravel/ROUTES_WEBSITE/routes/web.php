<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/USER/userhome', function () {
    return view('USER/userhome');
});


Route::get('/USER/about', function () {
    return view('USER/about');
});


Route::get('/USER/contact', function () {
    return view('USER/contact');
});

Route::get('/USER/gallery', function () {
    return view('USER/gallery');
});
Route::get('/USER/experience', function () {
    return view('USER/experience');
});

Route::get('/ADMIN/adminhome', function () {
    return view('ADMIN/adminhome');
});


Route::get('/', function () {
    return view('Login');
 });

 Route::get('/Registration', function () {
    return view('Registration');
 });

Route::post('/ADMIN/adminhome', [App\Http\Controllers\GalleryController::class, 'upload']);
Route::get('/USER/gallery', [App\Http\Controllers\GalleryController::class,'show']);
Route::post('/login',[App\Http\Controllers\AuthController::class,'login']);
Route::post('/Registration',[App\Http\Controllers\AuthController::class,'register']);
Route::get('/logout',[App\Http\Controllers\AuthController::class,'logout']);