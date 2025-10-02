<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Rendez-vous - K'RINE TATTOO</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variables couleurs - Charte graphique K'RINE TATTOO */
        :root {
            --noir-profond: #000000;
            --beige-sable: #D4B896;
            --creme-ecru: #F5F1EB;
            --blanc-casse: #FEFEFE;
            --beige-clair: #F8F6F3;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: var(--noir-profond);
            max-width: 650px;
            margin: 0 auto;
            padding: 0;
            background: linear-gradient(135deg, var(--creme-ecru) 0%, var(--beige-clair) 100%);
            background-attachment: fixed;
        }

        .email-wrapper {
            background: var(--blanc-casse);
            margin: 20px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .header {
            background: linear-gradient(135deg, var(--noir-profond) 0%, rgba(0, 0, 0, 0.9) 100%);
            color: var(--blanc-casse);
            text-align: center;
            padding: 40px 30px;
            position: relative;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, var(--beige-sable), transparent);
            opacity: 0.1;
        }

        .header h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
            z-index: 2;
        }

        .header .subtitle {
            font-size: 1rem;
            font-weight: 400;
            margin-top: 10px;
            color: var(--beige-sable);
            letter-spacing: 1px;
            position: relative;
            z-index: 2;
        }

        .content {
            padding: 40px 30px;
        }

        .section-title {
            font-family: 'Oswald', sans-serif;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--noir-profond);
            margin: 0 0 20px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid var(--beige-sable);
            padding-bottom: 8px;
        }

        .info-block {
            background: linear-gradient(135deg, var(--creme-ecru) 0%, var(--beige-clair) 100%);
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            border-left: 5px solid var(--beige-sable);
            box-shadow: 0 4px 20px rgba(212, 184, 150, 0.2);
        }

        .info-row {
            display: flex;
            margin-bottom: 12px;
            align-items: center;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-label {
            font-family: 'Oswald', sans-serif;
            font-weight: 500;
            color: var(--noir-profond);
            min-width: 120px;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        .info-value {
            color: rgba(0, 0, 0, 0.8);
            font-weight: 400;
            font-size: 0.95rem;
        }

        .project-details {
            background: var(--blanc-casse);
            padding: 25px;
            border-radius: 12px;
            border: 2px solid var(--beige-sable);
            margin-top: 20px;
            box-shadow: inset 0 2px 10px rgba(212, 184, 150, 0.1);
        }

        .project-details p {
            margin: 0;
            font-style: italic;
            color: rgba(0, 0, 0, 0.8);
            line-height: 1.7;
        }

        .footer {
            background: var(--beige-clair);
            text-align: center;
            padding: 30px;
            border-top: 1px solid var(--beige-sable);
            color: rgba(0, 0, 0, 0.6);
            font-size: 0.85rem;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .main-text {
            font-weight: 500;
            color: var(--noir-profond);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .email-wrapper {
                margin: 10px;
                border-radius: 12px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 30px 20px;
            }
            
            .info-block {
                padding: 20px;
            }
            
            .info-row {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .info-label {
                min-width: auto;
                margin-bottom: 4px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="header">
            <h1>K'RINE TATTOO</h1>
            <p class="subtitle">Nouvelle demande de rendez-vous</p>
        </div>

        <div class="content">
            <h2 class="section-title">👤 Informations du client</h2>
            
            <div class="info-block">
                <div class="info-row">
                    <span class="info-label">Prénom :</span>
                    <span class="info-value">{{ $prenom ?? 'Non spécifié' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Nom :</span>
                    <span class="info-value">{{ $nom ?? 'Non spécifié' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email :</span>
                    <span class="info-value">{{ $email ?? 'Non spécifié' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Téléphone :</span>
                    <span class="info-value">{{ $telephone ?: 'Non renseigné' }}</span>
                </div>
            </div>

            <h2 class="section-title">🎨 Détails du projet</h2>
            
            <div class="info-block">
                @if($style)
                <div class="info-row">
                    <span class="info-label">Style :</span>
                    <span class="info-value">{{ ucfirst($style) }}</span>
                </div>
                @endif
                
                @if($zone)
                <div class="info-row">
                    <span class="info-label">Zone :</span>
                    <span class="info-value">{{ ucfirst($zone) }}</span>
                </div>
                @endif
                
                @if($taille)
                <div class="info-row">
                    <span class="info-label">Taille :</span>
                    <span class="info-value">{{ ucfirst($taille) }}</span>
                </div>
                @endif
            </div>

            @if($description)
            <h3 class="section-title">📝 Description du projet</h3>
            <div class="project-details">
                <p>{{ $description }}</p>
            </div>
            @endif

            @if($files && count($files) > 0)
            <h3 class="section-title">📎 Fichiers joints</h3>
            <div class="info-block">
                <div class="info-row">
                    <span class="info-label">Fichiers :</span>
                    <span class="info-value">{{ count($files) }} fichier(s) joint(s)</span>
                </div>
            </div>
            @endif
        </div>

        <div class="footer">
            <p class="main-text">📧 Email automatique envoyé depuis le site K'RINE TATTOO</p>
            <p>🕒 Envoyé le {{ now()->format('d/m/Y à H:i') }}</p>
            <p>Répondez directement à cet email pour contacter le client</p>
        </div>
    </div>
</body>
</html>