<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemandeRendezVous;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/test-mail', function () {
    try {
        // Version simple avec Mail::raw pour tester
        $message = "
=== NOUVELLE DEMANDE DE RENDEZ-VOUS - K'RINE TATTOO ===

Nom: Jean Dupont
Email: jean.dupont@example.com
Téléphone: 06 12 34 56 78
Projet: Tatouage réaliste sur l'avant-bras représentant un lion
Date préférée: 2024-01-15 14:00

Message du client:
Bonjour, je souhaiterais prendre rendez-vous pour discuter de mon projet de tatouage.

---
Email automatique envoyé depuis le site K'RINE TATTOO
        ";
        
        Mail::raw($message, function ($mail) {
            $mail->to('krine.tattoo@example.com')
                 ->subject('Nouvelle demande de rendez-vous - K\'RINE TATTOO')
                 ->replyTo('jean.dupont@example.com');
        });
        
        return '<h1>Email de demande de rendez-vous envoyé avec succès !</h1><p>Vérifiez votre boîte Mailtrap pour voir l\'email.</p>';
    } catch (Exception $e) {
        return '<h1>Erreur lors de l\'envoi</h1><p>' . $e->getMessage() . '</p>';
    }
});
