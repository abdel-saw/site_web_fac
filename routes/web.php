<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'view_user.Acceuil')
    ->name('acceuil');

Route::view('dashboard', 'view_admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'view_admin.profile')
    ->middleware(['auth'])
    ->name('profile');
Route::view('/Sucess', 'succes')
    ->name('Sucess');

require __DIR__.'/auth.php';
