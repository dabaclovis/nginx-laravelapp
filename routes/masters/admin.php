<?php

use App\Http\Controllers\AdminsController;
use Illuminate\Support\Facades\Route;

Route::prefix('administrator')
->group(fn() =>[
    Route::controller(AdminsController::class)
    ->group(fn() => [
        Route::get('dashboard','index')->name('admins.index'),
    ]),
]);
