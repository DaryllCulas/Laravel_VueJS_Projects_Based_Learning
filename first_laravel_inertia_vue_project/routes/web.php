<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');
Route::inertia('/register', 'Auth/Register')->name('register');

Route::inertia('/about', 'About', ['user' => 'Nigga'])->name('about');
