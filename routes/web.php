<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //dump( config('custom.test') );
    return view('welcome');
});
