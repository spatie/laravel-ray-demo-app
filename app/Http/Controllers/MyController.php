<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function show()
    {
        ray()->clearScreen();

        ray()->showViews();

        ray()->showRequests();

        return view('welcome');
    }
}
