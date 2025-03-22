<?php include __DIR__ . '/templates/header.php'; ?>
<h2>Liste des clients</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach($clients as $client): ?>
    <tr>
        <td><?= $client['id'] ?></td>
        <td><?= $client['name'] ?></td>
        <td><?= $client['email'] ?></td>
        <td>
            <a href="index.php?action=delete-client&id=<?= $client['id'] ?>">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>