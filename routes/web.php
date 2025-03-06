<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\cashier_controller;
use App\Http\Controllers\employee_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

// Admin Panel
Route::get('/admin/dashboard', [admin_controller::class,'dashboard']);

// Inventory (product, category, unit)
Route::get('/admin/category', [admin_controller::class,'category']);
Route::get('/admin/subCategory', [admin_controller::class,'subCategory']);
Route::get('/admin/unit', [admin_controller::class, 'unit']);
Route::get('/admin/products', [admin_controller::class,'product']);
Route::get('/admin/addProduct', [admin_controller::class,'addProduct']);
Route::get('/admin/stock', [admin_controller::class, 'stock']);
Route::get('/admin/printBarcode', [admin_controller::class, 'printBarcode']);

// Stock
Route::get('/admin/stockIn', [admin_controller::class, 'stockIn']);
Route::get('/admin/stockOut', [admin_controller::class, 'stockOut']);
Route::get('/admin/stockTransfer', [admin_controller::class, 'stockTransfer']);
Route::get('/admin/stockAdjustment', [admin_controller::class, 'stockAdjustment']);

// Sale
Route::get('/admin/sale', [admin_controller::class, 'sale']);
Route::get('/admin/invoice', [admin_controller::class, 'invoice']);
Route::get('/admin/saleReturn', [admin_controller::class, 'saleReturn']);

// Membership Card
Route::get('/admin/card', [admin_controller::class, 'card']);
Route::get('/admin/createCard', [admin_controller::class, 'createCard']);

// People
Route::get('/admin/customer', [admin_controller::class, 'customer']);
Route::get('/admin/supplier', [admin_controller::class, 'supplier']);

// Purchase
Route::get('/admin/purchase', [admin_controller::class, 'purchase']);

// Report
Route::get('/admin/saleReport', [admin_controller::class, 'saleReport']);
Route::get('/admin/inventoryReport', [admin_controller::class, 'inventoryReport']);
Route::get('/admin/purchaseReport', [admin_controller::class, 'purchaseReport']);
Route::get('/admin/endOfDayClosingReport', [admin_controller::class, 'endOfDayClosingReport']);
Route::get('/admin/expenseReport', [admin_controller::class, 'expenseReport']);
Route::get('/admin/incomeReport', [admin_controller::class, 'incomeReport']);
Route::get('/admin/membershipReport', [admin_controller::class, 'membershipReport']);
Route::get('/admin/supplierReport', [admin_controller::class, 'supplierReport']);
Route::get('/admin/vatReport', [admin_controller::class, 'vatReport']);

// Branches
Route::get('/admin/branches', [admin_controller::class, 'branches']);
Route::get('/admin/exchangeRate', [admin_controller::class, 'exchangeRate']);

// User
Route::get('/admin/users', [user_controller::class,'user']);
Route::get('/admin/addUser', [user_controller::class,'addUser']);

// Employee
Route::get('/admin/employee', [employee_controller::class,'employee']);

// Department
Route::get('/admin/department', [admin_controller::class,'department']);

// Cashier
Route::get('/admin/cashier', [cashier_controller::class,'cashier']);
Route::post('/testingSendData', [cashier_controller::class,'senddata']);
