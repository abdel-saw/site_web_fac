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
Route::view('/FSTS en chiffres','view_user.A_Propos.FSTS_chiffres')
    ->name('fsts-chiffres');
Route::view('/Gestions des conseils et des commissions','view_admin.Gestion_Conseil_Commi.ListeMembre')
     ->middleware(['auth'])
    ->name('gest-com-cons');
require __DIR__.'/auth.php';
