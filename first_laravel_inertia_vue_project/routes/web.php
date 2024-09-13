<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');

Route::inertia('/register', 'Auth/Register')->name('register');
ROute::post('/register', [AuthController::class, 'register']);


Route::inertia('/about', 'About', ['user' => 'Nigga'])->name('about');
