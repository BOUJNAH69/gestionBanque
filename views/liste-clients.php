<?php include __DIR__ . '/templates/header.php'; ?>
<div class="container">
    <h2>Liste des clients</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Date d'inscription</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $client['id_client'] ?></td>
                <td><?= $client['nom'] ?></td>
                <td><?= $client['prenom'] ?></td>
                <td><?= $client['email'] ?></td>
                <td><?= $client['telephone'] ?></td>
                <td><?= $client['adresse'] ?></td>
                <td><?= $client['date_inscription'] ?></td>
                <td>
                    <a href="index.php?action=delete-client&id_client=<?= $client['id_client'] ?>"
                        onclick="return confirm('Es-tu sûr(e) de vouloir supprimer ce client ? Cette action est irréversible.')">
                        Supprimer
                    </a>
                    <a href="index.php?action=edit-client&id_client=<?= $client['id_client'] ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>