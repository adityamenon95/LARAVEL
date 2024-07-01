<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});


Route::get('/Registration',function(){
    return view('Registration');
});

Route::get('Employee/Search',function(){
    return view('Employee/Search');
});


Route::get('Admin/Blog',function(){
    return view('Admin/Blog');
});


Route::get('Admin/Home',function(){
    return view('Admin/Home');
});

Route::post('/login',[App\Http\Controllers\logincontroller::class,'login']);
Route::post('Registration',[App\Http\Controllers\CrudController::class,'store']);
Route::get('Employee/Search',[App\Http\Controllers\CrudController::class,'show']);
Route::get('/edit/{id}',[App\Http\Controllers\CrudController::class,'edit']);
Route::put('/edit/{id}',[App\Http\Controllers\CrudController::class,'update']);
Route::get('/delete/{id}',[App\Http\Controllers\CrudController::class,'destroy']);
Route::get('Employee/Search',[App\Http\Controllers\CrudController::class,'search']);
Route::post('Admin/Blog',[App\Http\Controllers\BlogController::class,'store']);
Route::get('Admin/Home',[App\Http\Controllers\BlogController::class,'show']);
Route::get('/logout',[App\Http\Controllers\logoutcontroller::class,'logout']);