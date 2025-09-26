<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemandeRendezVous;
use Exception;

class DemandeRendezVousController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'prenom' => 'required|string|max:255',
                'nom' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telephone' => 'nullable|string|max:255',
                'style' => 'nullable|string|max:255',
                'zone' => 'nullable|string|max:255',
                'taille' => 'nullable|string|max:255',
                'description' => 'required|string',
                'files.*' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:5120'
            ]);

            $mail = new DemandeRendezVous(
                $validated['prenom'],
                $validated['nom'],
                $validated['email'],
                $validated['telephone'],
                $validated['style'],
                $validated['zone'],
                $validated['taille'],
                $validated['description'],
                []
            );

            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $mail->attach($file->getRealPath(), [
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType(),
                    ]);
                }
            }

            Mail::to('franciettaskill@gmail.com')->send($mail);

            return redirect('/#contact')->with('success', 'Votre demande a été envoyée avec succès ! Je vous répondrai dans les 24h.');
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect('/#contact')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            return redirect('/#contact')->with('error', 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer.');
        }
    }
}
