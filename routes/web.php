<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');


});

//login

Route::get('/login',[AuthController::class,'login'])->name('login.auth');
Route::get('/verify',[AuthController::class,'verify'])->name('verify.auth');
Route::get('/logout',[AuthController::class,'logout'])->name('logout.auth');




//route layout
Route::get('/admin', [DashboardController::class, 'index'])->name('layout.index');
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
Route::get('/admin/profile', [DashboardController::class, 'profile'])->name('profile.index');
