<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $a = 1;
        return view('test.test');
    }
}
