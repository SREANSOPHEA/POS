<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employee_controller extends Controller
{
    function employee(){
        return view("admin.employee.employee");
    }
}
