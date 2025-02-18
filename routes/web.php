<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\employee_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', [admin_controller::class,'dashboard']);
Route::get('/admin/category', [admin_controller::class,'category']);

// User
Route::get('/admin/users', [user_controller::class,'user']);
Route::get('/admin/addUser', [user_controller::class,'addUser']);

// Employee
Route::get('/admin/employee', [employee_controller::class,'employee']);

// Product
Route::get('/admin/products', [product_controller::class,'product']);
Route::get('/admin/addProuct', [product_controller::class,'addProduct']);
