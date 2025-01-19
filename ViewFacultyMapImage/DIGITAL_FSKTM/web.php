<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) ->name('home');


Route::get('/facultyimage', function () {
    return view('facultyimage');
}) ->name('facultyimage');

