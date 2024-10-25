<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('index');
});

Route::post('/message', [MessageController::class, 'send'])->name('message');
