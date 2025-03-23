<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard2');
Route::get('admin/login', function() { return view('admin.login'); })->name('admin.login');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function() { return view('about'); })->name('aboutUs');
Route::get('/contact', function() { return view('contact_us'); })->name('contactUs');

