<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('/Insert',function(){
    return view('Insert');
});

Route::get('/',function(){
    return view('Search');
});

Route::get('/ADMIN/home', function () {
    return view('ADMIN/home');
});

Route::post('/Insert',[App\Http\Controllers\CrudController::class,'store']);
Route::get('/',[App\Http\Controllers\CrudController::class,'show']);
Route::get('/edit/{id}',[App\Http\Controllers\CrudController::class,'edit']);
Route::put('/edit/{id}',[App\Http\Controllers\CrudController::class,'update']);
Route::get('/delete/{id}',[App\Http\Controllers\CrudController::class,'destroy']);
Route::post('/Search',[App\Http\Controllers\CrudController::class,'search']);