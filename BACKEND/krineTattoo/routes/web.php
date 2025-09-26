<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/test-mail', function () {
    try {
        Mail::raw('Ceci est un email de test depuis K\'RINE TATTOO !', function ($message) {
            $message->to('test@example.com')
                   ->subject('Test Email - K\'RINE TATTOO');
        });
        
        return '<h1>Email envoyé avec succès !</h1><p>Vérifiez votre boîte Mailtrap.</p>';
    } catch (Exception $e) {
        return '<h1>Erreur lors de l\'envoi</h1><p>' . $e->getMessage() . '</p>';
    }
});
