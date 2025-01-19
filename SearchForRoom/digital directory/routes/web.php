<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\RoomSearch;
use App\Models\Room;

Route::get('/', function () {
    return view('home');
});

Route::get('/rooms/{id}', [RoomSearch::class, 'show']);
