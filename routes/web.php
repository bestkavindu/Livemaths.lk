<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::name('client.')->group(function () {
    Route::get('/',[HomeController::class, 'index']);

});