<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ComConsMemberController;
use App\Http\Controllers\MemberDelete;
use App\Livewire\ComConsGestion;
use App\Livewire\MemberSelection;
use App\Livewire\MemberViewMore;

Route::get('/', [AccueilController::class, 'index'])->name('acceuil');
Route::get('/announcements/{id}', [AccueilController::class, 'show'])->name('announcements.show');
Route::get('/images/{id}', [AccueilController::class, 'showImage'])->name('images.show');
Route::get('/announcements/{id}/image', [AccueilController::class, 'showImage'])->name('announcements.image');
Route::get('/evenements', [AccueilController::class, 'allEvents'])->name('evenements.index');
Route::get('/all-announcements', [AccueilController::class, 'allAnnouncements'])->name('announcements.index');

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
    Route::get('/add new commission-conseil member',[ComConsMemberController::class,'createMember'])   
    ->name('add-com-cons-member');
Route::post('/add new commission-conseil member',[ComConsMemberController::class,'storeMember'])
    ->middleware(['auth','verified'])    
    ->name('store-com-cons-member');
Route::get('/add new commission-conseil',[ComConsMemberController::class,'createComm_Cons'])->name('add-com-cons');
Route::post('/add new commission-conseil-success',[ComConsMemberController::class,'storeComm_Cons'])
    ->middleware(['auth','verified'])    
    ->name('store-com-cons');
Route::view('/Gestion Conseils et Commissions','view_admin.Gestion_Conseil_Commi.VoirComCons')->name('voir-com-cons');
Route::get('/com-cons-gestion', ComConsGestion::class)->name('com-cons-gestion');
Route::get('/member-selection/{com_con_id}', MemberSelection::class)->name('member-selection');
Route::view('/Vue Conseils et Commissions','view_user.A_Propos.Conseils_Commissions')->name('cons-com-user');
Route::get('/view more/{id} {view_type}',MemberViewMore::class)->name('view-more');
//Route::get('/delete Com-Cons/{id}',[ComConsGestion::class,'deleteCom'])->name('delete-com');

require __DIR__.'/auth.php';
