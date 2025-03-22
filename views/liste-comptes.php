<?php include __DIR__ . '/templates/header.php'; ?>
<h2>Liste des comptes</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Client ID</th>
        <th>Balance</th>
        <th>Actions</th>
    </tr>
    <?php foreach($comptes as $compte): ?>
    <tr>
        <td><?= $compte['id'] ?></td>
        <td><?= $compte['client_id'] ?></td>
        <td><?= $compte['balance'] ?></td>
        <td>
            <a href="index.php?action=delete-compte&id=<?= $compte['id'] ?>">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>