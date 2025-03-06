<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    function dashboard()
    {
        return view("dashboard");
    }

    // Category
    function category()
    {
        return view("admin.category.Category");
    }

    function subCategory()
    {
        return view("admin.subcategory.subCategory");
    }

    function unit()
    {
        return view("admin.unit.unit");
    }

    function product(){
        return view("admin.product.product");
    }

    function addProduct(){
        return view("admin.product.addProduct");
    }

    function stock()
    {
        return view("admin.product.stock");
    }

    function stockIn()
    {
        return view("admin.stock.stockIn");
    }

    function stockOut()
    {
        return view("admin.stock.stockOut");
    }

    function stockTransfer()
    {
        return view("admin.stock.stockTransfer");
    }

    function stockAdjustment()
    {
        return view("admin.stock.stockAdjustment");
    }

    function sale()
    {
        return view("admin.sale.sale");
    }

    function invoice()
    {
        return view("admin.sale.invoice");
    }

    function saleReturn()
    {
        return view("admin.sale.saleReturn");
    }

    function card(){
        return view("admin.membershipCard.card");
    }

    function createCard(){
        return view("admin.membershipCard.createCard");
    }

    function customer(){
        return view("admin.people.customer");
    }
    
    function supplier(){
        return view("admin.people.supplier");
    } 

    function purchase(){
        return view("admin.purchase.purchase");
    }

    function saleReport(){
        return view('admin.report.saleReport');
    }

    function inventoryReport(){
        return view('admin.report.inventoryReport');
    }

    function purchaseReport(){
        return view('admin.report.purchaseReport');
    }

    function endOfDayClosingReport(){
        return view('admin.report.endOfDayClosing');
    }

    function expenseReport(){
        return view('admin.report.expenseReport');
    }

    function incomeReport(){
        return view('admin.report.incomeReport');
    }

    function membershipReport(){
        return view('admin.report.membershipReport');
    }

    function supplierReport(){
        return view('admin.report.supplierReport');
    }

    function vatReport(){
        return view('admin.report.vatReport');
    }

    function department(){
        return view('admin.department.department');
    }

    function branches(){
        return view('admin.branches.branches');
    }

    function exchangeRate(){
        return view('admin.branches.exchangeRate');
    }

    function printBarcode(){ 
        return view('admin.product.printBarcode');
    }
}
