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

    public function createClient($name, $email) {
        $this->clientModel->addClient($name, $email);
        header('Location: index.php');
    }

    public function updateClient($id, $name, $email) {
        $this->clientModel->updateClient($id, $name, $email);
        header('Location: index.php');
    }

    public function deleteClient($id) {
        $this->clientModel->deleteClient($id);
        header('Location: index.php');
    }

    public function viewClient($id) {
        $client = $this->clientModel->getClientById($id);
        require_once __DIR__ . '/../views/view-client.php';
    }
}