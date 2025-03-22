<?php include __DIR__ . '/templates/header.php'; ?>
<h2>Créer un nouveau compte</h2>
<form action="index.php?action=create-compte" method="POST">
    <div>
        <label for="id_client">ID du client :</label>
        <input type="number" name="id_client" id="id_client" placeholder="ID du client" required>
    </div>
    
    <div>
        <label for="type_compte">Type de compte :</label>
        <select name="type_compte" id="type_compte" required>
            <option value="courant">Courant</option>
            <option value="épargne">Épargne</option>
            <option value="joint">Joint</option>
        </select>
    </div>
    
    <div>
        <label for="solde">Solde initial :</label>
        <input type="number" step="0.01" name="solde" id="solde" placeholder="Montant initial" required>
    </div>
    
    <div>
        <label for="num_client_associe">Numéro client associé :</label>
        <input type="text" name="num_client_associe" id="num_client_associe" placeholder="Exemple : CL-001" required>
    </div>
    
    <button type="submit">Créer le compte</button>
</form>