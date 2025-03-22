<?php

require_once __DIR__ . '/connexion.php';

class AdminDao {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }

    public function getAdminByUsername($user) {
        $stmt = $this->db->prepare("SELECT * FROM administrateurs WHERE user = :user");
        $stmt->execute(['user' => $user]);
        return $stmt->fetch();
    }
}