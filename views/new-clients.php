<?php include __DIR__ . '/templates/header.php'; ?>
<h2>Ajouter un nouveau client</h2>
<form action="index.php?action=create-client" method="POST">
    <input type="text" name="name" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Ajouter</button>
</form>