<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemandeRendezVous extends Mailable
{
    use Queueable, SerializesModels;

    public $prenom;
    public $nom;
    public $email;
    public $telephone;
    public $style;
    public $zone;
    public $taille;
    public $description;
    public $files;

    /**
     * Create a new message instance.
     */
    public function __construct($prenom, $nom, $email, $telephone = null, $style = null, $zone = null, $taille = null, $description = null, $files = null)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->style = $style;
        $this->zone = $zone;
        $this->taille = $taille;
        $this->description = $description;
        $this->files = $files;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de rendez-vous - K\'RINE TATTOO',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.demande-rendez-vous',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
