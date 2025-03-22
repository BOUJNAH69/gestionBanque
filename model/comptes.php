<?php
class Comptes {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=gestion_clients', 'root', '');
    }

    public function getAllComptes() {
        $stmt = $this->db->query("SELECT * FROM comptes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCompte($client_id, $balance) {
        $stmt = $this->db->prepare("INSERT INTO comptes (client_id, balance) VALUES (:client_id, :balance)");
        $stmt->execute(['client_id' => $client_id, 'balance' => $balance]);
    }

    public function deleteCompte($id) {
        $stmt = $this->db->prepare("DELETE FROM comptes WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}