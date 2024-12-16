<?php

use App\Http\Controllers\API\FederationController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('federations', FederationController::class);
    Route::get('user', function (Request $request) {
        return $request->user();
    })->name('user');
});
