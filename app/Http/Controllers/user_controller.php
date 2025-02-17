<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_controller extends Controller
{

    function user(){
        return view("user.user",['page'=>'user']);
    }

    function addUser(){
        return view("user.addUser",['page'=>'user']);
    }
}
