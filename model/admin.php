<?php
require_once __DIR__ . '/../dao/connexion.php';

class Admin {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }

    // Récupérer tous les administrateurs
    public function getAllAdmins() {
        $stmt = $this->db->query("SELECT * FROM administrateurs");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ajouter un administrateur
    public function addAdmin($user, $mot_de_passe) {
        $stmt = $this->db->prepare("INSERT INTO administrateurs (user, mot_de_passe) VALUES (:user, :mot_de_passe)");
        $stmt->execute([
            'user' => $user,
            'mot_de_passe' => $mot_de_passe // Attention : idéalement utiliser password_hash()
        ]);
    }

    // Supprimer un administrateur par ID
    public function deleteAdmin($id) {
        $stmt = $this->db->prepare("DELETE FROM administrateurs WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    // Modifier le mot de passe d’un administrateur
    public function updatePassword($id, $newPassword) {
        $stmt = $this->db->prepare("UPDATE administrateurs SET mot_de_passe = :mot_de_passe WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'mot_de_passe' => $newPassword
        ]);
    }
}