<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showHomepage()
    {
        return view("home");
    }
}
