<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lamar', [ApplicationController::class, 'create'])
    ->name('applications.create');