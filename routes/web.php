<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('address');
// });


Route::get('/',[App\Http\Controllers\CustomerController::class,'index'])->name('home');

Route::get('/add_customer',[App\Http\Controllers\HomeController::class,'index'])->name('add.customer');

Route::get('/get-district',[HomeController::class,'getDistrict']);
Route::get('/get-village',[HomeController::class,'getVillage']);


Route::resource('customer',App\Http\Controllers\CustomerController::class);