<?php include __DIR__ . '/templates/header.php'; ?>
<h2>Créer un nouveau compte</h2>
<form action="index.php?action=create-compte" method="POST">
    <input type="number" name="client_id" placeholder="ID du client" required>
    <input type="number" name="balance" placeholder="Balance" required>
    <button type="submit">Créer</button>
</form>