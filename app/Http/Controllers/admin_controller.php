<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    function dashboard(){
        return view("admin.dashboard",['page'=>"dashboard"]);
    }

    // Category

    function category(){
        return view("admin.Category",['page'=>"category"]);
    }


    // User

    function user(){
        return view("admin.user",['page'=>'user']);
    }

    function addUser(){
        return view("admin.addUser",['page'=>'user']);
    }
}
