<?php

require_once __DIR__ . '/../../dao/connexion.php';

class AdminDao {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }

    public function getAdminByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE username = :username");
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
    }
}