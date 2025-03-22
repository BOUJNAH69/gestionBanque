<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion des comptes et clients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Connexion administrateur</h2>
        <form action="../index.php?action=connexion" method="POST">
            <div>
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>