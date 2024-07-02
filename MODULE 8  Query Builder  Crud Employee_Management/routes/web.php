<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('View');
});

Route::get('/Insert', function () {
    return view('Insert');
});

Route::get('/Defination', function () {
    return view('Defination');
});



Route::post('/Insert',[App\Http\Controllers\CrudController::class,'store']);
Route::get('/',[App\Http\Controllers\CrudController::class,'show']);
Route::get('delete/{id}',[App\Http\Controllers\CrudController::class,'destroy']);
Route::get('edit/{id}',[App\Http\Controllers\CrudController::class,'edit']);
Route::put('updateid/{id}',[App\Http\Controllers\CrudController::class,'update']);

