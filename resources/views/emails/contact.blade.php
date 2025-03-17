<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1e3a8a;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #1e3a8a;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
    </div>
    
    <div class="content">
        <p>Un nouveau message a été envoyé via le formulaire de contact du site web :</p>
        
        <div class="field">
            <p class="label">Nom :</p>
            <p>{{ $name }}</p>
        </div>
        
        <div class="field">
            <p class="label">Email :</p>
            <p>{{ $email }}</p>
        </div>
        
        <div class="field">
            <p class="label">Téléphone :</p>
            <p>{{ $phone }}</p>
        </div>
        
        <div class="field">
            <p class="label">Sujet :</p>
            <p>{{ $subject }}</p>
        </div>
        
        <div class="field">
            <p class="label">Message :</p>
            <p>{{ $messageContent }}</p>
        </div>
    </div>
    
    <div class="footer">
        <p>Ce message a été envoyé automatiquement depuis le site web de KORALYS Construction.</p>
        <p>© {{ date('Y') }} KORALYS Construction - Tous droits réservés</p>
    </div>
</body>
</html>