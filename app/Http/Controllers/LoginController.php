<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //this method will show login page for customer/general user
    public function index(){
        return view("login");
    }
}
