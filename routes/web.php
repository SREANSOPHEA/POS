<?php

use App\Http\Controllers\admin_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', [admin_controller::class,'dashboard']);
Route::get('/admin/category', [admin_controller::class,'category']);

// Users
Route::get('/admin/users', [admin_controller::class,'user']);
Route::get('/admin/addUser', [admin_controller::class,'addUser']);
