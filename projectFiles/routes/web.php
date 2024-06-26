<?php

use App\Http\Controllers\contentTypeController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class,'home'])->name('home');
Route::post('/',[homeController::class,'store'])->name('home.addContent');