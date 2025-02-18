<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_controller extends Controller
{
    function product(){
        return view("product.product",['page'=>'product']);
    }

    function addProduct(){
        return view("product.addProduct",['page'=>'product']);
    }
}
