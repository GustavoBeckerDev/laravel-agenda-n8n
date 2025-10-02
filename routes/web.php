<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('profiles', App\Http\Controllers\Auth\ProfileController::class)->only('edit', 'update');


Route::resource('profiles', App\Http\Controllers\Auth\ProfileController::class)->only('edit', 'update');
