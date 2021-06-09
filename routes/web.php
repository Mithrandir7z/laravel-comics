<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//ROUTE HOME.BLADE.PHP
Route::get('/', function () {

    $comics_array = config("comics");

    $data = [
        
        "comics_array" => $comics_array
    ];


    return view('home', $data);
})->name('home');



//ROUTE PRODUCT.BLADE.PHP
Route::get('/product/{id}', function ($id) {

    $comics_array = config("comics");

    $product = [];

    foreach($comics_array as $comic) {
        
        if($comic['id'] == $id) {
            $product = $comic;
        }
    }

    $data = [
        'product' => $product
    ];

    return view('product', $data);
})->name('product');