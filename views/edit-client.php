<?php include __DIR__ . '/templates/header.php'; ?>
<div class="container">
    <h2>Modifier un client</h2>
    <form action="index.php?action=update-client" method="POST">
        <input type="hidden" name="id_client" value="<?= $client['id_client'] ?>">

        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?= $client['nom'] ?>" required>
        </div>

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" value="<?= $client['prenom'] ?>" required>
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?= $client['email'] ?>" required>
        </div>

        <div>
            <label for="telephone">Téléphone :</label>
            <input type="text" name="telephone" id="telephone" value="<?= $client['telephone'] ?>" required>
        </div>

        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" value="<?= $client['adresse'] ?>" required>
        </div>

        <button type="submit">Mettre à jour</button>
    </form>
</div>