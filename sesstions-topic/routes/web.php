<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Welcome;

Route::get('/', [Welcome::class, 'index']);

Route::view('profile', 'profile');
