<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/controllers/auth-controller.php';
require_once __DIR__ . '/controllers/clients-controller.php';
require_once __DIR__ . '/controllers/comptes-controller.php';

$authController = new AuthController();
$clientsController = new ClientsController();
$comptesController = new ComptesController();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'connexion':
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $authController->connect($_POST['username'], $_POST['password']);
            } else {
                $authController->index();
            }
            exit();
        case 'disconnect':
            $authController->disconnect();
            break;
        case 'create-client':
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
                $clientsController->createClient($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['adresse']);
            }
            break;
        case 'update-client':
            if (!empty($_POST['id_client']) && !empty($_POST['name']) && !empty($_POST['email'])) {
                $clientsController->updateClient($_POST['id'], $_POST['name'], $_POST['email']);
            }
            break;
        case 'delete-client':
            if (isset($_GET['id_client'])) {
                $clientsController->deleteClient($_GET['id_client']);
            }
            break;
        case 'view-client':
            if (isset($_GET['id_client'])) {
                $clientsController->viewClient($_GET['id']);
            }
            break;
        case 'create-compte':
            if (!empty($_POST['id_client']) && !empty($_POST['type_compte']) && !empty($_POST['solde']) && !empty($_POST['num_client_associe'])) {
                $comptesController->createCompte(
                    $_POST['id_client'],
                    $_POST['type_compte'],
                    $_POST['solde'],
                    $_POST['num_client_associe']
                );
            }
            break;

        case 'delete-compte':
            if (isset($_GET['id_compte'])) {
                $comptesController->deleteCompte($_GET['id_compte']);
            }
            break;
        case 'edit-compte':
            if (isset($_GET['id_compte'])) {
                $comptesController->editCompte($_GET['id_compte']);
            }
            break;

        case 'update-compte':
            if (!empty($_POST['id_compte']) && !empty($_POST['type_compte']) && !empty($_POST['solde'])) {
                $comptesController->updateCompte($_POST['id_compte'], $_POST['type_compte'], $_POST['solde']);
            }
            break;
        case 'edit-client':
            if (isset($_GET['id_client'])) {
                $clientsController->editClient($_GET['id_client']);
            }
            break;

        case 'update-client':
            if (!empty($_POST['id_client']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
                $clientsController->updateClient(
                    $_POST['id_client'],
                    $_POST['nom'],
                    $_POST['prenom'],
                    $_POST['email'],
                    $_POST['telephone'],
                    $_POST['adresse']
                );
            }
            break;
        default:
            if (!isset($_SESSION['username'])) {
                $authController->index();
                exit();
            }
            $clientsController->listAllClients();
    }
} elseif (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'new-client':
            if (!isset($_SESSION['username'])) {
                $authController->index();
                exit();
            }
            $clientsController->newClient();
            break;
        case 'new-compte':
            if (!isset($_SESSION['username'])) {
                $authController->index();
                exit();
            }
            $comptesController->newCompte();
            break;
        case 'liste-comptes':
            if (!isset($_SESSION['username'])) {
                $authController->index();
                exit();
            }
            $comptesController->listAllComptes();
            break;
        case 'login':
            $authController->index();
            break;
        default:
            if (!isset($_SESSION['username'])) {
                $authController->index();
                exit();
            }
            $clientsController->listAllClients();
    }
} else {
    if (!isset($_SESSION['username'])) {
        $authController->index();
        exit();
    }
    $clientsController->listAllClients();
}

?>