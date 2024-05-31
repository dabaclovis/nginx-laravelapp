<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::prefix('logination')
->group(fn() => [
    Route::post('registered',[RegisterController::class,'handledRegistation'])->name('registration'),

    Route::post('directory',[LoginController::class,'loginations'])->name('logined'),
]);
