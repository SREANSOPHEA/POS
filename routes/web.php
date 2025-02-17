<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', [admin_controller::class,'dashboard']);
Route::get('/admin/category', [admin_controller::class,'category']);

// Users
Route::get('/admin/users', [user_controller::class,'user']);
Route::get('/admin/addUser', [user_controller::class,'addUser']);
