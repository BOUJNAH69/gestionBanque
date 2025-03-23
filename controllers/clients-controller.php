<?php
require_once __DIR__ . '/../model/clients.php';

class ClientsController {
    private $clientModel;

    public function __construct() {
        $this->clientModel = new Clients();
    }

    public function listAllClients() {
        $clients = $this->clientModel->getAllClients();
        require_once __DIR__ . '/../views/liste-clients.php';
    }

    public function newClient() {
        require_once __DIR__ . '/../views/new-clients.php';
    }

    public function createClient($nom, $prenom, $email, $telephone, $adresse) {
        $this->clientModel->addClient($nom, $prenom, $email, $telephone, $adresse);
        header('Location: index.php');
    }


    public function deleteClient($id_client) {
        // Vérifie si le client a des comptes
        $hasComptes = $this->clientModel->clientHasComptes($id_client);
        if ($hasComptes) {
            echo "<script>alert('Impossible de supprimer ce client car il possède des comptes.'); window.location.href='index.php';</script>";
            exit;
        }
    
        // Si aucun compte, on supprime
        $this->clientModel->deleteClient($id_client);
        header('Location: index.php');
        exit;
    }

    public function viewClient($id) {
        $client = $this->clientModel->getClientById($id);
        require_once __DIR__ . '/../views/view-client.php';
    }
    public function editClient($id_client) {
        $client = $this->clientModel->getClientById($id_client);
        include __DIR__ . '/../views/edit-client.php';
    }
    
    public function updateClient($id_client, $nom, $prenom, $email, $telephone, $adresse) {
        $this->clientModel->updateClient($id_client, $nom, $prenom, $email, $telephone, $adresse);
        header('Location: index.php');
        exit;
    }
}