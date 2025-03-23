<?php include __DIR__ . '/templates/header.php'; ?>
<div class="container">
    <h2>Modifier un compte</h2>
    <form action="index.php?action=update-compte" method="POST">
        <input type="hidden" name="id_compte" value="<?= $compte['id_compte'] ?>">
        
        <div>
            <label for="type_compte">Type de compte :</label>
            <select name="type_compte" id="type_compte" required>
                <option value="courant" <?= $compte['type_compte'] === 'courant' ? 'selected' : '' ?>>Courant</option>
                <option value="épargne" <?= $compte['type_compte'] === 'épargne' ? 'selected' : '' ?>>Épargne</option>
            </select>
        </div>
        
        <div>
            <label for="solde">Solde :</label>
            <input type="number" step="0.01" name="solde" id="solde" value="<?= $compte['solde'] ?>" required>
        </div>
        
        <button type="submit">Mettre à jour</button>
    </form>
</div>