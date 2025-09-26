<?php

use App\Mail\DemandeRendezVous;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeRendezVousController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::post('/demande-rendez-vous', [DemandeRendezVousController::class, 'store']);

