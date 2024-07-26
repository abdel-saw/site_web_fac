<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'view_user.Acceuil.Acceuil')
    ->name('acceuil');

Route::view('dashboard', 'view_admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'view_admin.profile')
    ->middleware(['auth'])
    ->name('profile');
Route::view('/A propos de la FSTS', 'view_user.A_Propos.A_Propos')
    ->name('a-propos');
Route::view('/Mot du doyen','view_user.A_Propos.Mots_Doyen')
    ->name('mots-doyen');

require __DIR__.'/auth.php';
