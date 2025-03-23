<?php
require_once __DIR__ . '/../model/comptes.php';

class ComptesController {
    private $comptesModel;

    public function __construct() {
        $this->comptesModel = new Comptes();
    }

    public function createCompte($id_client, $type_compte, $solde, $num_client_associe) {
        // Vérifie si l'ID client existe
        $clientExist = $this->comptesModel->clientExists($id_client);
        if (!$clientExist) {
            echo "Erreur : Le client avec l'ID $id_client n'existe pas.";
            exit;
        }
        $this->comptesModel->addCompte($id_client, $type_compte, $solde, $num_client_associe);

        header('Location: http://localhost/gestionBanque/index.php?page=liste-comptes');
        exit;
    }

    public function listAllComptes() {
        $comptes = $this->comptesModel->getAllComptes();
        include __DIR__ . '/../views/liste-comptes.php';
    }

    public function deleteCompte($id) {
        $this->comptesModel->deleteCompte($id);
        header('Location: http://localhost/gestionBanque/index.php?page=liste-comptes');
        exit;
    }

    public function newCompte() {
        include __DIR__ . '/../views/new-comptes.php';
    }
    public function editCompte($id_compte) {
        $compte = $this->comptesModel->getCompteById($id_compte);
        include __DIR__ . '/../views/edit-compte.php';
    }
    
    public function updateCompte($id_compte, $type_compte, $solde) {
        $this->comptesModel->updateCompte($id_compte, $type_compte, $solde);
        header('Location: http://localhost/gestionBanque/index.php?page=liste-comptes');
        exit;
    }
}