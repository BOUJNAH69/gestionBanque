<?php include __DIR__ . '/templates/header.php'; ?>
<div class="container">
<h2>Ajouter un nouveau client</h2>
<form action="index.php?action=create-client" method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telephone" placeholder="Téléphone" required>
    <input type="text" name="adresse" placeholder="Adresse" required>
    <button type="submit">Ajouter</button>
</form>
</div>