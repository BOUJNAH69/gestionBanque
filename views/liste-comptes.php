<?php include __DIR__ . '/templates/header.php'; ?>
<h2>Liste des comptes</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID Compte</th>
        <th>ID Client</th>
        <th>Type de compte</th>
        <th>Solde</th>
        <th>Date d'ouverture</th>
        <th>Numéro client associé</th>
        <th>Actions</th>
    </tr>
    <?php foreach($comptes as $compte): ?>
    <tr>
        <td><?= $compte['id_compte'] ?></td>
        <td><?= $compte['id_client'] ?></td>
        <td><?= $compte['type_compte'] ?></td>
        <td><?= $compte['solde'] ?> €</td>
        <td><?= $compte['date_ouverture'] ?></td>
        <td><?= $compte['num_client_associe'] ?></td>
        <td>
            <a href="index.php?action=delete-compte&id=<?= $compte['id_compte'] ?>">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>