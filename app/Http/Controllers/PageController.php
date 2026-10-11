<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('userzone.dashboard');
    }
}
