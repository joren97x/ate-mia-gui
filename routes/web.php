<?php

use App\Http\Controllers\MarketingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marketings/export', [MarketingController::class, 'export']);
Route::resource('marketings', MarketingController::class);
