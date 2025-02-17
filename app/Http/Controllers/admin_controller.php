<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    function dashboard(){
        return view("dashboard",['page'=>"dashboard"]);
    }

    // Category

    function category(){
        return view("category.Category",['page'=>"category"]);
    }


}
