<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorycontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/category', categorycontroller::class);
