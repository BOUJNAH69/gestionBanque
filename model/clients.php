<?php
require_once __DIR__ . '/../dao/connexion.php';

class Clients {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }

    public function getAllClients() {
        $stmt = $this->db->query("SELECT * FROM clients");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addClient($nom, $prenom, $email, $telephone, $adresse) {
        $stmt = $this->db->prepare("INSERT INTO clients (nom, prenom, email, telephone, adresse, date_inscription) VALUES (:nom, :prenom, :email, :telephone, :adresse, NOW())");
        $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'telephone' => $telephone,
            'adresse' => $adresse
        ]);
    }

    public function deleteClient($id_client) {
        $stmt = $this->db->prepare("DELETE FROM clients WHERE id_client = :id_client");
        $stmt->execute(['id_client' => $id_client]);
    }    

    public function getClientById($id_client) {
        $stmt = $this->db->prepare("SELECT * FROM clients WHERE id_client = :id_client");
        $stmt->execute(['id_client' => $id_client]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateClient($id_client, $nom, $prenom, $email, $telephone, $adresse) {
        $stmt = $this->db->prepare("UPDATE clients 
            SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, adresse = :adresse 
            WHERE id_client = :id_client");
        $stmt->execute([
            'id_client' => $id_client,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'telephone' => $telephone,
            'adresse' => $adresse
        ]);
    }
    public function clientHasComptes($id_client) {
        $stmt = $this->db->prepare("SELECT COUNT(*) as nb FROM comptes WHERE id_client = :id_client");
        $stmt->execute(['id_client' => $id_client]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['nb'] > 0;
    }
}