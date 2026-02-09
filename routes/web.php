<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::post('/save', [HomeController::class, 'save']);

route::get('/about', [AboutController::class, 'index']);

route::get('/contact',[ContactController::class,'index']);

route::get('/blog', [BlogController::class, 'index']);