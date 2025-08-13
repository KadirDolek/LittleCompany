<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend', [GlobalController::class, 'backendwelcome'])->name('backend');

Route::get('/employes',[GlobalController::class,'employes']);
Route::post('/create_employes',[GlobalController::class, 'store'])->name('add_employes');
Route::delete('/remove_employes/{id}',[GlobalController::class, 'destroy'])->name('remove_employes');

Route::get('/mail',[GlobalController::class,'mail'])->name('mail');
Route::post('/create_mail',[GlobalController::class, 'storemail'])->name('storemail');
Route::delete('/remove_mail/{id}',[GlobalController::class, 'destroymail'])->name('remove_mail');

Route::get('/contact',[GlobalController::class,'contact']);
