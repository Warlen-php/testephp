<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri:'/consumo', action:\App\Http\Controllers\consumocontroller::class);