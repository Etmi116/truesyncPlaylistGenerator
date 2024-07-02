<?php

use App\Http\Controllers\contentTypeController;
use App\Http\Controllers\homeController;
use App\Livewire\PlaylistParams;
use Illuminate\Support\Facades\Route;

//Route::get('/',PlaylistParams::class);

//former routes

Route::get('/', [homeController::class,'home'])->name('home');
//Route::post('/',[homeController::class,'store'])->name('home.addContent');