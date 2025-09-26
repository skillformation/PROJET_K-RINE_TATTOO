<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demande de Rendez-vous - K'RINE TATTOO</title>
</head>
<body>
    <h1>K'RINE TATTOO - Nouvelle demande de rendez-vous</h1>
    
    <h2>Informations du client</h2>
    <p><strong>Nom :</strong> {{ $nom ?? 'Non spécifié' }}</p>
    <p><strong>Email :</strong> {{ $email ?? 'Non spécifié' }}</p>
    <p><strong>Téléphone :</strong> {{ $telephone ?? 'Non spécifié' }}</p>
    <p><strong>Projet :</strong> {{ $projet ?? 'Non spécifié' }}</p>
    
    @if($datePreferee)
    <p><strong>Date préférée :</strong> {{ $datePreferee }}</p>
    @endif
    
    @if($message)
    <h3>Message du client</h3>
    <p>{{ $message }}</p>
    @endif
    
    <hr>
    <p><em>Email automatique envoyé depuis le site K'RINE TATTOO</em></p>
</body>
</html>