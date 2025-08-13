<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/backendWelcome',[GlobalController::class,'backendwelcome']);
Route::get('/employes',[GlobalController::class,'employes']);
