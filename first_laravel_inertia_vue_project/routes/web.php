<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');


Route::middleware('auth')->group(function () {
    Route::inertia('/dashboard', 'Dashboard', ['users' => User::paginate(5)])->name('dashboard');



    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware('guest')->group(function () {
    Route::inertia('/register', 'Auth/Register')->name('register');
    ROute::post('/register', [AuthController::class, 'register']);

    Route::inertia('/about', 'About', ['user' => 'Nigga'])->name('about');

    Route::inertia('login', 'Auth/Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

});
