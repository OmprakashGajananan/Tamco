<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/','home');
Route::view('/New_arrival','NewArrival');
Route::view('/About','About');
Route::view('/Contact','Contact');
Route::view('/Card','Card');
Route::view('/AddCard','AddCard');
Route::view('/Login','Login');
Route::view('/Register','Register');
Route::view('/Checkout','Checkout');
Route::view('/Blog','Blog');
Route::view('/BlogPost','BlogPost');
Route::view('/Privacy','Privacy');
