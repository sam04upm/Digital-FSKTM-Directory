<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('login-page');
});

//Login Route
// Route::post('/login', [AdminController::class, 'login']);

Route::get('/home', function () {
    return view('home');
});
