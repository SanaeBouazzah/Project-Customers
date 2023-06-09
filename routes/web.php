<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('customers',CustomerController::class);