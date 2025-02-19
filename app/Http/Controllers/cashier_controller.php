<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cashier_controller extends Controller
{
    function cashier(){
        return view("cashier.casher",[]);
    }
}
