<?php
require_once __DIR__ . '/../dao/connexion.php';

class Comptes {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }

    public function getAllComptes() {
        $stmt = $this->db->query("SELECT * FROM comptes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function clientExists($id_client) {
        $stmt = $this->db->prepare("SELECT id_client FROM clients WHERE id_client = :id_client");
        $stmt->execute(['id_client' => $id_client]);
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }
    

    public function addCompte($id_client, $type_compte, $solde, $num_client_associe) {
        $stmt = $this->db->prepare("INSERT INTO comptes (id_client, type_compte, solde, date_ouverture, num_client_associe)
        VALUES (:id_client, :type_compte, :solde, NOW(), :num_client_associe)");
$stmt->execute([
'id_client' => $id_client,
'type_compte' => $type_compte,
'solde' => $solde,
'num_client_associe' => $num_client_associe
]);    
    }

public function deleteCompte($id_compte) {
    $stmt = $this->db->prepare("DELETE FROM comptes WHERE id_compte = :id_compte");
    $stmt->execute(['id_compte' => $id_compte]);
}
public function getCompteById($id_compte) {
    $stmt = $this->db->prepare("SELECT * FROM comptes WHERE id_compte = :id_compte");
    $stmt->execute(['id_compte' => $id_compte]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function updateCompte($id_compte, $type_compte, $solde) {
    $stmt = $this->db->prepare("UPDATE comptes SET type_compte = :type_compte, solde = :solde WHERE id_compte = :id_compte");
    $stmt->execute([
        'id_compte' => $id_compte,
        'type_compte' => $type_compte,
        'solde' => $solde
    ]);
}
}