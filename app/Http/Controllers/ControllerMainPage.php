<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMainPage extends Controller
{
    public function index()
    {
        $user = "Hello, user!";

        return view("main_page/main_page", compact("user"));
    }
}
