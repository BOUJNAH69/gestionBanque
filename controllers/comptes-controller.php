<?php
require_once __DIR__ . '/../model/comptes.php';

class ComptesController {
    private $compteModel;

    public function __construct() {
        $this->compteModel = new Comptes();
    }

    public function listAllComptes() {
        $comptes = $this->compteModel->getAllComptes();
        require_once __DIR__ . '/../views/liste-comptes.php';
    }

    public function newCompte() {
        require_once __DIR__ . '/../views/new-comptes.php';
    }

    public function createCompte($client_id, $balance) {
        $this->compteModel->addCompte($client_id, $balance);
        header('Location: index.php?page=liste-comptes');
    }

    public function deleteCompte($id) {
        $this->compteModel->deleteCompte($id);
        header('Location: index.php?page=liste-comptes');
    }
}