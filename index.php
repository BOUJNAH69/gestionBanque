<?php
session_start();
require_once __DIR__ . '/controllers/auth-controller.php';
require_once __DIR__ . '/controllers/clients-controller.php';
require_once __DIR__ . '/controllers/comptes-controller.php';

$authController = new AuthController();
$clientsController = new ClientsController();
$comptesController = new ComptesController();

if (!isset($_SESSION['username'])) {
    $authController->index(); // Affiche la page de login
    exit;
}

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'connexion':
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $authController->connect($_POST['username'], $_POST['password']);
            }
            break;
        case 'disconnect':
            $authController->disconnect();
            break;
        case 'create-client':
            if (!empty($_POST['name']) && !empty($_POST['email'])) {
                $clientsController->createClient($_POST['name'], $_POST['email']);
            }
            break;
        case 'update-client':
            if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email'])) {
                $clientsController->updateClient($_POST['id'], $_POST['name'], $_POST['email']);
            }
            break;
        case 'delete-client':
            if (isset($_GET['id'])) {
                $clientsController->deleteClient($_GET['id']);
            }
            break;
        case 'view-client':
            if (isset($_GET['id'])) {
                $clientsController->viewClient($_GET['id']);
            }
            break;
        case 'create-compte':
            if (!empty($_POST['client_id']) && !empty($_POST['balance'])) {
                $comptesController->createCompte($_POST['client_id'], $_POST['balance']);
            }
            break;
        case 'delete-compte':
            if (isset($_GET['id'])) {
                $comptesController->deleteCompte($_GET['id']);
            }
            break;
        default:
            $clientsController->listAllClients();
    }
} elseif (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'new-client':
            $clientsController->newClient();
            break;
        case 'new-compte':
            $comptesController->newCompte();
            break;
        case 'liste-comptes':
            $comptesController->listAllComptes();
            break;
        case 'login':
            $authController->index();
            break;
        default:
            $clientsController->listAllClients();
    }
} else {
    $clientsController->listAllClients();
}
?>
