<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});