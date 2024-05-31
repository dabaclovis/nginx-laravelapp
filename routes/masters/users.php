<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')
->group(fn() => [
    Route::controller(HomeController::class)
    ->group(fn()=>[
        Route::get('home','index')->name('home'),
        Route::get('profile','profile')->name('users.profile'),
        Route::get('setting','setting')->name('users.settings'),
        Route::post('avatar','avatar')->name('users.avatar'),
        Route::post('updateUsername','updateUser')->name('updateUserName'),
    ]),
    Route::resource('articles',ArticlesController::class),
]);
