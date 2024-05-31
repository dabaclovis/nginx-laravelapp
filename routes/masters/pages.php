<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::prefix('pages')
->group(fn() => [
    Route::controller(PagesController::class)
    ->group(function(){
        Route::get('about','about')->name('pages.about');
    }),
]);
