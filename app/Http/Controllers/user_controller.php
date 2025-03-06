<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_controller extends Controller
{

    function user(){
        return view("admin.user.user");
    }

    function addUser(){
        return view("admin.user.addUser");
    }
}
