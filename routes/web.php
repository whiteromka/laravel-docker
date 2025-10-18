<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    //dump( config('custom.test') );
//    return view('welcome');
//});


//dd([1,2]);

Route::get('/', [MainController::class, 'index']);

//Route::get('/post/{id}', function ($id) {
//    return 'post Id:' . $id;
//});
//
//Route::get('/posts/{id}', function ($id) {
//    return 'post Id:' . $id;
//});
//
////->where(['id' => '[\d]+']);
//
//Route::match(['get', 'post'], 'lala', function() {
//    return 'Lala';
//})->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
//
//Route::redirect('/here', '/there', 301);
//
//
//
//
//Route::fallback(function() {
//    return response('Fallback Page', 404);
//    //return response()->json(['error' => 'Fallback Page'], 404);
//});
