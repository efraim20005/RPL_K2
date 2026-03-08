<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');


});

//login

Route::middleware('guest:user')->group(function () {
    Route::get('/',[AuthController::class,'login'])->name('auth.login');
    Route::post('/verify',[AuthController::class,'verify'])->name('auth.verify');

});

Route::middleware('auth:user')->group(function () {
    Route::prefix('admin')->group(function () {
//route layout
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard.index');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile.index');
        Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    });

});





